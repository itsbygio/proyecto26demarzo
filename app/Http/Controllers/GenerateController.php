<?php

namespace App\Http\Controllers;

use App\Docente;
use App\Estudiante;
use App\Nota;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpSpreadsheet\IOFactory as IOFactoryExcel;

class GenerateController extends Controller
{
    public function actas_reunion(request $request)
    {
        $filename = $request->nombre_doc . '.docx';

        $templateProcessor = new TemplateProcessor('templates/acta.docx');

        $fontStyle['name'] = 'Arial';
        $fontStyle['size'] = 11;

        $inline = new TextRun();

        $templateProcessor->setComplexValue('Lugar', $inline->addText(
            htmlspecialchars($request->lugar_reunion),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Fecha', $inline->addText(
            htmlspecialchars($request->fecha_reunion),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('HInicio',  $inline->addText(
            htmlspecialchars($request->hora_inicio),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('HFin', $inline->addText(
            htmlspecialchars($request->hora_final),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Agenda',  $inline->addText(
            htmlspecialchars($request->agenda),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Objecto', $inline->addText(
            htmlspecialchars($request->objeto_reunion),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Desarrollo', $inline->addText(
            htmlspecialchars($request->desarrollo_reunion),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Descripcion',  $inline->addText(
            htmlspecialchars($request->descripcion_reunion),
            $fontStyle
        ));

        $pathToSave = public_path() . '/generados/' . $filename;
        $templateProcessor->saveAs($pathToSave);

        // /* Set the PDF Engine Renderer Path */
        // $domPdfPath = base_path('vendor/dompdf/dompdf');
        // \PhpOffice\PhpWord\Settings::setPdfRendererPath($domPdfPath);
        // \PhpOffice\PhpWord\Settings::setPdfRendererName('DomPDF');

        // //Load word file
        // $Content = \PhpOffice\PhpWord\IOFactory::load($pathToSave);

        // //Save it into PDF
        // $PDFWriter = \PhpOffice\PhpWord\IOFactory::createWriter($Content, 'PDF');

        // $PDFWriter->save(public_path('new-result.pdf'));

        $headers = array('Content-Type: ' . mime_content_type($pathToSave));
        return response()->download($pathToSave, $filename, $headers)->deleteFileAfterSend(true);

        // return response()->json([
        //     'fecha_reunion' => $request->fecha_reunion,
        //     'lugar_reunion' => $request->lugar_reunion,
        //     'hora_inicio' => $request->hora_inicio,
        //     'hora_final' => $request->hora_final,
        //     'agenda' => $request->agenda,
        //     'objeto_reunion' => $request->objeto_reunion,
        //     'desarrollo' => $request->desarrollo_reunion,
        //     'descripcion' =>  $request->descripcion_reunion,
        //     'nombre_doc' => $request->nombre_doc
        // ], 200);
    }
    public function permisos_docentes(request $request)
    {

        $date = Carbon::now();
        $docente =  Docente::firstWhere('num_id', $request->cedula_docente);
        $data['Docente'] = $docente->nombre . ' ' . $docente->apellidos;
        $data['Nombre_doc'] = $docente->nombre_doc;
        $data['Numero_documento'] = $docente->num_id;
        $data['Sede'] = 'A';
        $data['Cargo'] = 'Docente';
        $data['Contacto'] = $docente->contacto;
        $data['Anio'] = $date->year;
        $data['Mes'] = $date->month;
        $data['Dia'] = $date->day;

        $filename = 'Permisos' . '.xls';
        $spreadsheet = IOFactoryExcel::load('templates/FORMATO PERMISOS NUEVO PROPUESTO.xlsx');
        $worksheet = $spreadsheet->getActiveSheet();
        $worksheet->getCell('A11')->setValue($data['Docente']);
        $worksheet->getCell('C12')->setValue($data['Numero_documento']);
        $worksheet->getCell('F12')->setValue($data['Contacto']);
        $worksheet->getCell('A14')->setValue($data['Sede']);
        $worksheet->getCell('D14')->setValue($data['Cargo']);
        $pathToSave = public_path() . '/generados/' . $filename;
        $writer = IOFactoryExcel::createWriter($spreadsheet, 'Xls');
        $writer->save($pathToSave);
        return response()->download($pathToSave)->deleteFileAfterSend(true);

        // return response()->json([
        //     'identificacion' => $request->cedula_docente,
        //     'nombre_doc' => $request->nombre_doc
        // ], 200);
    }
    public function certificado_notas(request $request)
    {


        $estudiante =  Estudiante::firstWhere('num_id', $request->id_cer_est);
        $notas =  Nota::with(['materia'])->where('id_est', $estudiante->id)->get();

        $filename = 'Certificado' . '.docx';
        $templateProcessor = new TemplateProcessor('templates/certificado 26 actualizado.docx');
        $fontStyle['name'] = 'Arial';
        $fontStyle['size'] = 11;
        $inline = new TextRun();

        $table = new Table(array('borderSize' => 12, 'borderColor' => 'black', 'width' => 9000, 'unit' => TblWidth::TWIP));
        $table->addRow();
        $table->addCell(200)->addText('Asignaturas');
        $table->addCell(200)->addText('Desempeño');

        foreach ($notas as $nota) {
            $table->addRow();
            $table->addCell(200)->addText($nota->materia->titulo);
            $table->addCell(200)->addText($nota->nota);
        }


        $templateProcessor->setComplexBlock('Table', $table);

        $pathToSave = public_path() . '/generados/' . $filename;
        $templateProcessor->saveAs($pathToSave);
        $headers = array('Content-Type: ' . mime_content_type($pathToSave));
        return response()->download($pathToSave, $filename, $headers)->deleteFileAfterSend(true);

        // return response()->json([
        //     'identificacion' => $request->id_cer_est,
        //     'nombre_doc' => $request->nombre_doc
        // ], 200);
    }
    public function constancia_estudio(request $request)
    {

        // $meses = ['Enero'];
        $date = Carbon::now();
        $estudiante =  Estudiante::with('curso')->firstWhere('num_id', $request->id_con_est);
        $data['Estudiante'] = $estudiante->nombre . ' ' . $estudiante->apellidos;
        $data['Tipo_documento'] = $estudiante->tipo_doc;
        $data['Numero_documento'] = $estudiante->num_id;
        $data['Sede'] = 'A';
        $data['Grado'] = $estudiante->curso->titulo;
        $data['Anio'] = $date->year;
        $data['Mes'] = $date->month;
        $data['Dia'] = $date->day;

        $filename = 'Constancia' . '.docx';
        $templateProcessor = new TemplateProcessor('templates/Constancia 26 de marzo formato edusy.docx');
        $fontStyle['name'] = 'Arial';
        $fontStyle['size'] = 11;
        $inline = new TextRun();

        $templateProcessor->setComplexValue('Estudiante', $inline->addText(
            htmlspecialchars($data['Estudiante']),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Tipo_documento', $inline->addText(
            htmlspecialchars($data['Tipo_documento']),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Numero_documento', $inline->addText(
            htmlspecialchars($data['Numero_documento']),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Sede', $inline->addText(
            htmlspecialchars($data['Sede']),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Grado', $inline->addText(
            htmlspecialchars($data['Grado']),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Anio', $inline->addText(
            htmlspecialchars($data['Anio']),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('CurrentAnio', $inline->addText(
            htmlspecialchars($data['Anio']),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Mes', $inline->addText(
            htmlspecialchars($data['Mes']),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Dia', $inline->addText(
            htmlspecialchars($data['Dia']),
            $fontStyle
        ));

        $pathToSave = public_path() . '/generados/' . $filename;
        $templateProcessor->saveAs($pathToSave);
        $headers = array('Content-Type: ' . mime_content_type($pathToSave));
        return response()->download($pathToSave, $filename, $headers)->deleteFileAfterSend(true);

        // return response()->json([
        //     'identificacion' => $request->id_con_est,
        //     'nombre_doc' => $request->nombre_doc
        // ], 200);


    }
    public function circular(request $request)
    {
        $filename = $request->nombre_doc . '.docx';
        $templateProcessor = new TemplateProcessor('templates/FORMATOCIRCULARES.docx');
        $fontStyle['name'] = 'Arial';
        $fontStyle['size'] = 1;
        $inline = new TextRun();

        $templateProcessor->setComplexValue('Para', $inline->addText(
            htmlspecialchars($request->para),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('De', $inline->addText(
            htmlspecialchars($request->de),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Asunto', $inline->addText(
            htmlspecialchars($request->asunto),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Descripcion', $inline->addText(
            htmlspecialchars($request->descripcion),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('Fecha', $inline->addText(
            htmlspecialchars(Carbon::now()->format('Y-m-d')),
            $fontStyle
        ));

        $pathToSave = public_path() . '/generados/' . $filename;
        $templateProcessor->saveAs($pathToSave);
        $headers = array('Content-Type: ' . mime_content_type($pathToSave));
        return response()->download($pathToSave, $filename, $headers)->deleteFileAfterSend(true);

        // return response()->json([
        //     'para' => $request->para,
        //     'de' => $request->de,
        //     'asunto' => $request->asunto,
        //     'descripcion' => $request->descripcion,
        //     'nombre_doc' => $request->nombre_doc

        // ], 200);
    }
}

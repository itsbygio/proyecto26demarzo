<?php

namespace App\Http\Controllers;

use App\Docente;
use App\Estudiante;
use App\Nota;
use App\Curso;
use App\Documento;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\Element\Table;
use PhpOffice\PhpWord\Element\TextRun;
use PhpOffice\PhpWord\SimpleType\TblWidth;
use PhpOffice\PhpWord\TemplateProcessor;
use PhpOffice\PhpSpreadsheet\IOFactory as IOFactoryExcel;
use Illuminate\Support\Facades\Auth;

class GenerateController extends Controller
{
    public function actas_reunion(request $request)
    {

        $filename =strtr($request->nombre_doc, " ", "_").'.docx';
        $redactadopor=Auth::user()->nombre.''.Auth::user()->apellidos;
        $templateProcessor = new TemplateProcessor('templates/acta2.docx');
        
        $fontStyle['name'] = 'Arial';
        $fontStyle['size'] = 11;
        $fontStyle['bold'] = false;
        $fontStyle2['size'] = 5;
        $fontStyle2['name'] = 'Arial';
        $fontStyle2['bold'] = false;

        $inline = new TextRun(); 
        $id_acta= Documento::where('nm','acr')->get()->count()+1;
     
       
        
        $templateProcessor->setComplexValue('actaid', $inline->addText(
            htmlspecialchars($id_acta),
            $fontStyle
        ));

        $templateProcessor->setComplexValue('nombrerol', $inline->addText(
            htmlspecialchars($redactadopor),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('Anio', $inline->addText(
            htmlspecialchars(date("Y")),
            $fontStyle
        )); 
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

        $filename = strtr($request->nombre_doc, " ", "_").'.xls';
        $spreadsheet = IOFactoryExcel::load('templates/FORMATO PERMISOS NUEVO PROPUESTO.xlsx');
        $worksheet = $spreadsheet->getActiveSheet();
        $worksheet->getCell('A11')->setValue($data['Docente']);
        $worksheet->getCell('C12')->setValue($data['Numero_documento']);
        $worksheet->getCell('F12')->setValue($data['Contacto']);
        $worksheet->getCell('A14')->setValue($data['Sede']);
        $worksheet->getCell('D14')->setValue($data['Cargo']);
        if($request->tipo_reporte=="ausencia"){
            $worksheet->getCell('A17')->setValue("x");
        }
        else if($request->tipo_reporte=="permiso"){
            $worksheet->getCell('B17')->setValue("x");

        }
        if($request->fecha_inicial!=""){
            $worksheet->getCell('C16')->setValue($request->fecha_inicial);

        }
        if($request->fecha_final!=""){
            $worksheet->getCell('D16')->setValue($request->fecha_final);

        }
        if($request->hora_salida!=""){
            $worksheet->getCell('E16')->setValue($request->hora_salida);

        }
        if($request->hora_ingreso!=""){
            $worksheet->getCell('F16')->setValue($request->hora_ingreso);
        }
        if($request->total_dias!=""){
            $worksheet->getCell('B18')->setValue($request->total_dias);
        }
        if($request->plan_trabajo=="si"){
            $worksheet->getCell('F18')->setValue("SI  X");
            $worksheet->getCell('G18')->setValue("NO");


        }
        else if($request->plan_trabajo=="no"){
            $worksheet->getCell('G18')->setValue("NO  X");
            $worksheet->getCell('F18')->setValue("SI");

        }
        if($request->motivo=="ce"){
            $worksheet->getCell('C20')->setValue($request->motivo);
            $worksheet->getCell('D20')->setValue($request->soporte);

        }
        else if($request->motivo=="cd"){
            $worksheet->getCell('C21')->setValue($request->motivo);
            $worksheet->getCell('D21')->setValue($request->soporte);
        }
        else if($request->motivo=="ef"){
            $worksheet->getCell('C22')->setValue($request->motivo);
            $worksheet->getCell('D22')->setValue($request->soporte);
        }
        else if($request->motivo=="tm"){
            $worksheet->getCell('C23')->setValue($request->motivo);
            $worksheet->getCell('D23')->setValue($request->soporte);
        }
        else if($request->motivo=="lc"){
            $worksheet->getCell('C24')->setValue($request->motivo);
            $worksheet->getCell('D24')->setValue($request->soporte);
        }
        else if($request->motivo=="ed"){
            $worksheet->getCell('C25')->setValue($request->motivo);
            $worksheet->getCell('D25')->setValue($request->soporte);
        }
        else if($request->motivo=="cap"){
            $worksheet->getCell('C26')->setValue($request->motivo);
            $worksheet->getCell('D26')->setValue($request->soporte);
        }
        else if($request->motivo=="pjd"){
            $worksheet->getCell('C27')->setValue($request->motivo);
            $worksheet->getCell('D27')->setValue($request->soporte);
        }
        else if($request->motivo=="pdv"){
            $worksheet->getCell('C28')->setValue($request->motivo);
            $worksheet->getCell('D28')->setValue($request->soporte);
        }
        else if($request->motivo=="per"){
            $worksheet->getCell('C29')->setValue($request->motivo);
            $worksheet->getCell('D29')->setValue($request->soporte);
        }
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


        $meses = [1 =>'Enero', 2=>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5=>'Mayo', 6=>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10=>'Octubre', 11 =>'Noviembre', 12=>'Diciembre'];
         $id_curso_modal= $request->id_curso_modal;
        $estudiante =  Estudiante::firstWhere('num_id', $request->id_cer_est);
        //$notas =  Nota::with(['materia'])->where('id_est', $estudiante->id)->get();
        $curso= Curso::find($id_curso_modal);
        
        $notas = Nota::where('id_est',$estudiante->id)->where('id_curso', $id_curso_modal)->get();
        $filename = strtr($request->nombre_doc, " ", "_").'.docx';
        $templateProcessor = new TemplateProcessor('templates/certificado 26 actualizado.docx');
        $fontStyle['name'] = 'Verdana';
        $fontStyle['size'] = 10;
        $fontStyle['bold'] = true;

        $inline = new TextRun();
           
        $templateProcessor->setComplexValue('nombre', $inline->addText(
            htmlspecialchars($estudiante->nombre),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('apellidos', $inline->addText(
            htmlspecialchars($estudiante->apellidos),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('anio', $inline->addText(
            htmlspecialchars($curso->año),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('year', $inline->addText(
            htmlspecialchars(date("Y")),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('mes', $inline->addText(
            htmlspecialchars($meses[date("m")]),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('dia', $inline->addText(
            htmlspecialchars(date("d")),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('titulo', $inline->addText(
            htmlspecialchars($curso->titulo_letras),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('titulocurso', $inline->addText(
            htmlspecialchars($curso->titulo_letras),
            $fontStyle
        ));
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

        $meses = [1 =>'Enero', 2=>'Febrero', 3 =>'Marzo', 4 =>'Abril', 5=>'Mayo', 6=>'Junio', 7 =>'Julio', 8 =>'Agosto', 9 =>'Septiembre', 10=>'Octubre', 11 =>'Noviembre', 12=>'Diciembre'];
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

        $filename = strtr($request->nombre_doc, " ", "_").'.docx';
        $templateProcessor = new TemplateProcessor('templates/constancia.docx');
        $fontStyle['name'] = 'Verdana';
        $fontStyle['size'] = 10;
        $fontStyle['bold'] = true;

        $inline = new TextRun();
        $templateProcessor->setComplexValue('nivel', $inline->addText(
            htmlspecialchars($estudiante->nivel),
            $fontStyle
        ));
        $templateProcessor->setComplexValue('jornada', $inline->addText(
            htmlspecialchars($estudiante->jornada),
            $fontStyle
        ));
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
            htmlspecialchars($meses[$data['Mes']]),
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
          //  return response()->json($request->all());
        $idcircular= Documento::where('nm','cir')->get()->count()+1;
        $filename = strtr($request->nombre_doc, " ", "_").'.docx';
        $templateProcessor = new TemplateProcessor('templates/FORMATOCIRCULARES.docx');
        $fontStyle['name'] = 'Arial';
        $fontStyle['size'] = 11;
        $fontStyle['bold'] = false;
        $fontStyle['spaceAfter'] = \PhpOffice\PhpWord\Shared\Converter::pointToTwip(0);
        //$fontStyle['spacing'] = 120;
        $fontStyle['space'] = array('line' => 1000);
       

        $inline = new TextRun();

        $templateProcessor->setComplexValue('idcircular', $inline->addText(
            htmlspecialchars($idcircular),
            $fontStyle
        ));

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

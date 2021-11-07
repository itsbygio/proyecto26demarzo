@extends('admin.layout')

@section('content')
<style>
li{
    list-style:none;
}
</style>
<div class="container ">
<p class="ml-3 mb-4"> Bienvenido {{ Auth::user()->nombre }}. Seleccione la Opcion que desea realizar:</p>

      <div class="row ml-3">

          <div class="col-md-4 ">
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3"> GU </h2> 
                    </div>
                    <div class="col-md-10  ">
                        Gestionar Usuarios:
                        <ul >
                            <li ><a href="/crear/usuario">Crear Usuario</a></li>
                            <li> <a href="/listar/usuarios">Listar Usuarios</a></li>
                        </ul>
                    </div>
            </div>
          </div>
  
         <div class="col-md-4">
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3 "> GDO </h2> 
                    </div>
                    <div class="col-md-10">
                        Gestionar Docentes:
                        <ul >
                            <li ><a href="/crear/usuario">Crear Docente</a></li>
                            <li> <a href="/listar/docente">Listar Docente</a></li>
                        </ul>
                    </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3 "> GDE </h2> 
                    </div>
                    <div class="col-md-10">
                        Gestionar Estudiantes:
                        <ul >
                            <li ><a href="/crear/estudiante">Crear Estudiante</a></li>
                            <li> <a href="/listar/estudiantes">Listar Estudiantes</a></li>
                        </ul>
                    </div>
            </div>
          </div>
          
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3 "> GD </h2> 
                    </div>
                    <div class="col-md-10">
                      Gestion documental:
                        <ul >
                        <li ><a href="/crear/documento">Crear Documento</a></li>
                            <li> <a href="/listar/documentos">Listar Documentos</a></li>
                            <li> <a href="/consultar/documentos">Consultar Documentos</a></li>
                            <li> <a href="/estadisticas/documentos">Generar Estadistica</a></li>
                        </ul>
                    </div>
            </div>
            
          </div>
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3 "> GN </h2> 
                    </div>
                    <div class="col-md-10">
                      Gestion notas:
                        <ul >
                        <li ><a href="/subir/nota">Subir Nota</a></li>
                            <li> <a href="/listar/notas">Listar Notas</a></li>
                          
                        </ul>
                    </div>
            </div>
            
          </div>
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3 "> GM </h2> 
                    </div>
                    <div class="col-md-10">
                      Gestion Materias:
                        <ul >
                        <li ><a href="/crear/materia">Crear Materia</a></li>
                            <li> <a href="/listar/materias">Listar Materias</a></li>

                        </ul>
                    </div>
            </div>
            
          </div>
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3 "> GC </h2> 
                    </div>
                    <div class="col-md-10">
                      Gestion cursos:
                        <ul >
                        <li ><a href="/crear/curso">Crear curso</a></li>
                            <li> <a href="/listar/cursos">Listar Cursos</a></li>

                        </ul>
                    </div>
            </div>
            
          </div>
          
      </div>

</div>
@endsection

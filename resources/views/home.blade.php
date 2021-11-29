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
      @if( Auth::user()->nrol=='1' )
          <div class="col-md-4 ">
              <div class="row">
                    <div class="col-md-2 bg-dark">
                       <h2 class="mt-4 ml-1"> GU </h2> 
                    </div>
                    <div class="col-md-8 border">
                    <div class="mb-2"></div>
                    <span class="ml-3">Gestionar Usuarios:</span>
                        <ul >
                            <li ><a href="/crear/usuario">Crear Usuario</a></li>
                            <li> <a href="/listar/usuarios">Listar Usuarios</a></li>
                        </ul>
                    </div>
            </div>
          </div>
  
         <div class="col-md-4">
              <div class="row">
                    <div class="col-md-2 bg-dark">
                       <h2 class="mt-4 ml-1"> GS</h2> 
                    </div>
                    <div class="col-md-8 border">
                    <div class="mb-2"></div>

                    <span class="ml-3 ">Gestionar Docentes:</span>
                        <ul >
                            <li ><a href="/crear/usuario">Crear Docente</a></li>
                            <li> <a href="/listar/docente">Listar Docente</a></li>
                        </ul>
                    </div>
            </div>
          </div>
          <div class="col-md-4">
              <div class="row">
                    <div class="col-md-2 bg-dark">

                       <h2 class="mt-4  ml-1"> GE </h2> 
                    </div>
                    <div class="col-md-8 border">
                    <div class="mb-2"></div>

                    <span class="ml-3 ">  Gestionar Estudiantes:</span>
                        <ul >
                            <li ><a href="/crear/estudiante">Crear Estudiante</a></li>
                            <li> <a href="/listar/estudiantes">Listar Estudiantes</a></li>
                        </ul>
                    </div>
            </div>
          </div>
          @endif
          @if( Auth::user()->nrol=='1' || Auth::user()->nrol=='2' )
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2 bg-dark">
                       <h2 class="mt-4 ml-1"> GC </h2> 
                    </div>
                  
                    <div class="col-md-8 border">
                        <div class="mb-2"></div>
                    <span class="ml-3 ">Gestion cursos:</span>
                        <ul >
                        <li ><a href="/crear/curso">Crear curso</a></li>
                            <li> <a href="/listar/cursos">Listar Cursos</a></li>

                        </ul>
                    </div>
            </div>
            
          </div>
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2 bg-dark">
                       <h2 class="mt-4 ml-1 "> GN </h2> 
                    </div>
                    <div class="col-md-8  border ">
                    <div class="mb-2"></div>

                    <span class="ml-3">  Gestion notas:</span>
                        <ul >
                        <li ><a href="/subir/nota">Subir Nota</a></li>
                            <li> <a href="/listar/notas">Listar Notas</a></li>
                          
                        </ul>
                    </div>
            </div>
            
          </div>
          <div class="col-md-4 ">
              <br>
              <div class="row">
                    <div class="col-md-2 bg-dark ">
                       <h2 class="mt-4 ml-1"> GM </h2> 
                    </div>
                    <div class="col-md-8 border  ">
                    <div class="mb-2"></div>

                      <span class="ml-3">Gestionar Materias:</span>
                        <ul >
                        <li ><a href="/crear/materia">Crear Materia</a></li>
                            <li> <a href="/listar/materias">Listar Materias</a></li>

                        </ul>
                    </div>
            </div>
            @endif
          </div>
          <div class="col-md-4">
              <br>
              <div class="row">
                    <div class="col-md-2 bg-dark">
                       <h2 class="mt-5 ml-1"> GD </h2> 
                    </div>
                    <div class="col-md-8 border">
                    <div class="mb-2"></div>
                    <span class="ml-3">   Gestion documental:</span>
                        <ul >
                        <li ><a href="/crear/documento">Crear Documento</a></li>
                            <li> <a href="/listar/documentos">Listar Documentos</a></li>
                            <li> <a href="/consultar/documentos">Consultar Documentos</a></li>
                            <li> <a href="/estadisticas/documentos">Generar Estadistica</a></li>
                        </ul>
                    </div>
            </div>
            
          </div>
          
      </div>

</div>
@endsection

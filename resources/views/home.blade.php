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

          <div class="col-md-4">
              <div class="row">
                    <div class="col-md-2">
                       <h2 class="mt-3"> GU </h2> 
                    </div>
                    <div class="col-md-10">
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
                       <h2 class="mt-3"> GD </h2> 
                    </div>
                    <div class="col-md-10">
                        Gestionar Documentos:
                        <ul >
                            <li ><a href="/crear/documento">Crear Documento</a></li>
                        </ul>
                    </div>
            </div>
          </div>
         
      </div>

</div>
@endsection

@extends('admin.layout')

@section('content')
<div class="container">
@if (session('status'))
<div style=" background-color:#b9f6ca" class="alert  alert-dismissible fade show ml-4 mr-4 mb-4"  role="alert">
          {{ session('status') }} 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>  
@endif
    <h3>Editar curso</h3>
    <div class="row">
        <div class="col-xl-4">
        <form  enctype="multipart/form-data" action="/update/curso/{{$cursos->id}}" method="POST">
       @csrf
        <h5>El curso seleccionado es:</h5>
        <div class="input-group mb-3">
                <input type="text"  name="titulo" class="form-control" value="{{$cursos->titulo}}" aria-label="Recipient's username" aria-describedby="basic-addon2" >
               
        </div>        
        
      </div>
      <div class="col-xl-4">
        <h5>El curso en letras es:</h5>
        <div class="input-group mb-3">
                <input type="text"  name="titulo_letras" class="form-control" value="{{$cursos->titulo_letras}}" aria-label="Recipient's username" aria-describedby="basic-addon2" >
              
        </div>        
      </div>
      <div class="col-xl-4">
        <h5>El año del curso es:</h5>
        <div class="input-group mb-3">
                <input type="text"  name="año" class="form-control" value="{{$cursos->año}}" aria-label="Recipient's username" aria-describedby="basic-addon2" >
              
        </div>        
      </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <button  class="btn btn-primary" >Editar curso</button>
        </div>
      </div>

      <br>
      </form>
      <div class="row mb-3">
      <h4>Estudiantes asignados al curso:</h4>
      </div>
      <div class="row mb-4 ">
        <div class="col-xl-4">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-user-plus mr-1"></i>  </button>
        </div>
      </div>
      <table id="table_id" class="table table-striped table-bordered" style="width:100%">
        
        <thead>
             <tr>
                  <th>id </th>
                 <th>nombre </th>
                 <th>apellidos</th>
                 <th>cedula</th>
                 <th>opciones</th>
             </tr>
         </thead>
         <tbody  >
  

         </tbody>

     </table>
</div>
@include('cursos.modal')
@endsection
@section('scripts')
@include('cursos.cursos_script')
@endsection
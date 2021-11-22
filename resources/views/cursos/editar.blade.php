@extends('admin.layout')

@section('content')
<div class="container">
    <h3>Editar curso</h3>
    <div class="row">
        <div class="col-xl-4">
        <h5>El curso seleccionado es:</h5>
        <div class="input-group mb-3">
                <input type="text" class="form-control" value="11-1" aria-label="Recipient's username" aria-describedby="basic-addon2" >
               
        </div>        
      </div>
      <div class="col-xl-4">
        <h5>El año del curso es:</h5>
        <div class="input-group mb-3">
                <input type="text" class="form-control" value="2021" aria-label="Recipient's username" aria-describedby="basic-addon2" >
              
        </div>        
      </div>
    </div>
    <div class="row">
        <div class="col-xl-4">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Editar curso</button>
        </div>
      </div>
      <br>
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
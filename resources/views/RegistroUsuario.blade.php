@extends('layout')

@section('content') 


<form action="{{url('/RegistrarUsuario')}}" class="form-horizontal" method="post" enctype="multipart/form-data">

{{ csrf_field()}}
<h3 class="text-center">FORMULARIO REGISTRO DE USUARIO</h3> 


<div class="row">
    <div class="col-5">
      <label for="exampleFormControlInput1" class="form-label">Nombre de Usuario</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" name="usuario">
    </div>

    <div class="col-5">
      <label for="exampleFormControlInput1" class="form-label">Correo Electronico</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo Electronico" name="email">
    </div>
  </div>
  
  <div class="row">
      <div class="col-5">
          <label for="exampleFormControlInput1" class="form-label">Departamento</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Departamento" name="departamento">
        </div>

        <div class="col-5">
          <label for="exampleFormControlInput1" class="form-label">Facultad</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Facultad" name="facultad">
        </div>
  </div>
    
  <div class="row">
          <div class="col-5">
              <label for="exampleFormControlInput1" class="form-label">Cargo</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cargo" name="cargo">
          </div>

          <div class="col-5">
              <label for="exampleFormControlInput1" class="form-label">CI</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="CI" name="ci">
          </div>
  </div>

  <div class="row">
          <div class="col-5">
              <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cargo" name="password">
          </div>

          <div class="col-5">
              <label for="exampleFormControlInput1" class="form-label">Telefono</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="CI" name="telefono">
          </div>
  </div>

 

<div class="row">
        <div class="col-5">
            <label for="CodigoSis"class="control-label">{{'Codigo sis'}}</label>
            <input type="text" class="form-control  {{$errors->has('codigoSis')?'is-invalid':'' }}" name="codigoSis" id="codigoSis" 
            value="{{ isset($personal->codigoSis)?$personal->codigoSis:old('codigoSis') }}"
            >
            {!!  $errors->first('codigoSis','<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="col-5">
            <label for="Unidad">Unidad</label>
            <select name="unidad" id="unidad" class="form-control  {{$errors->has('unidad')?'is-invalid':'' }}">
            <option selected disabled>Elige una Unidad para este Usuario</option>
            <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            {!!  $errors->first('unidad','<div class="invalid-feedback">:message</div>') !!}
        </div>
           
    </div>
<br>
<br>
    <div class="row">
        
        <div class="col-5">  
            
        </div>
        <div class="col-5">       
            <input type="submit" class="btn btn-success float-right" value="Guardar">
        </div>
    </div>

    </form>
@endsection 
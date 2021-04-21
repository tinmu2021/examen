@extends('layouts')
@section('container')

<form  action="{{route('createOrnitologo')}}" method="POST" class="ml-2">
@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">DNI</label>
        <input type="text" name="DNI" class="form-control col-3">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">NOMBRE</label>
        <input type="text" name="Nombre" class="form-control col-3" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">APELLIDO</label>
        <input type="text" name="Apellido" class="form-control col-3">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">TELEFONO</label>
        <input type="text" name="Telefono" class="form-control col-3">
    </div>
    
    <button type="submit" id="boton" class="btn-secondary col-3">Guardar</button>
</form>
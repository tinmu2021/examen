
@extends('layouts')
@section('container')

<form  action="{{route('createAve')}}" method="POST" class="ml-2">
@csrf
    <div class="form-group">
        <label for="exampleInputEmail1">NOMBRE COMUN</label>
        <input type="text" name="NombreComun" class="form-control col-3">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">NOMBRE CIENTIFICO</label>
        <input type="text" name="NombreCientifico" class="form-control col-3" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">FAMILIA</label>
        <input type="text" name="Familia" class="form-control col-3" >
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">ESPECIE</label>
        <input type="text" name="Especie" class="form-control col-3">
    </div>
    
    <button type="submit" id="boton" class="btn-secondary col-3">Guardar</button>
</form>
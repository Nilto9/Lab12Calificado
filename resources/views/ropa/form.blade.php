@extends('app')
@section('content')

<h1>{{$modo}} calzado</h1>

<label for="Cazaldo">Calzado</label>
<input type="text" name="Calzado" value="{{isset($ropa->Calzado)?$ropa->Calzado:''}}" id="Calzado">
<br>
<br>
<label for="Tipo">Tipo</label>
<input type="text" name="Tipo" value="{{isset($ropa->Tipo)?$ropa->Tipo:''}}" id="Tipo">
<br>
<br>
<label for="Color">Color</label>
<input type="text" name="Color" value="{{isset($ropa->Color)?$ropa->Color:''}}" id="Color">
<br>
<br>
<label for="Talla">Talla</label>
<input type="text" name="Talla" value="{{isset($ropa->Talla)?$ropa->Talla:''}}" id="Talla">
<br>
<br>
<label for="Marca">Marca</label>
<input type="text" name="Marca" value="{{isset($ropa->Marca)?$ropa->Marca:''}}" id="Marca">
<br>
<br>
<label for="Genero">Genero</label>
<input type="text" name="Genero" value="{{isset($ropa->Genero)?$ropa->Genero:''}}" id="Genero">
<br>
<br>
<label for="Edad">Edad</label>
<input type="text" name="Edad" value="{{isset($ropa->Edad)?$ropa->Edad:''}}" id="Edad">
<br>
<br>
<label for="Pago">Tipo de pago</label>
<input type="text" name="Pago" value="{{isset($ropa->Pago)?$ropa->Pago:''}}" id="Pago">
<br>
<br>
<label for="Monto">Monto</label>
<input type="number" name="Monto"  value="{{isset($ropa->Monto)?$ropa->Monto:''}}" step="any" id="Monto">
<br>
<br>
<input type="submit" value="{{$modo}} datos" class="btn btn-default">
<a href="{{url('ropa/')}}" class="btn btn-default">Regresar al inicio</a>
<br>
@stop
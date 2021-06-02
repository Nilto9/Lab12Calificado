@extends('app')
@section('content')

<h1>
  Información del calzado {{ $ropa->ropa}}
</h1>
 
<p>Id ropa: {{ $ropa->id}}</p>
<p>Calzado: {{ $ropa->Calzado}}</p>
<p>Tipo de calzado: {{ $ropa->Tipo }}</p>
<p>Color del calzado: {{ $ropa->Color}}</p>
<p>Tamaño del calzado:{{ $ropa->Talla}}</p>
<p>Marca del calzado:{{ $ropa->Marca}}</p>
<p>Genero del cliente: {{ $ropa->Genero}}</p>
<p>Edad del cliente: {{ $ropa->Edad}}</p>
<p>Tipo de pago que realizo el cliente: {{ $ropa->Pago}}</p>
<p>Monto que pago el cliente: {{ $ropa->Monto}}</p>
<p>Fecha creación: {{ $ropa->created_at }}</p>
<hr>
 
<a href="{{ route('ropa.index') }}" class="btn btn-default">Volver al índice</a>
<a href="{{ route('ropa.show', $ropa->id) }}" class="btn btn-default">Recargar</a>

@stop
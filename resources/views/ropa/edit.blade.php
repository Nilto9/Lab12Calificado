@extends('app')
@section('content')

<form action="{{url('/ropa/'.$ropa->id)}}" method="post">
@csrf
{{method_field('PATCH') }}

@include('ropa.form', ['modo'=>'Editar']);

</form>
@stop
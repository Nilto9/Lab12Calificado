
<form action="{{url('/ropa')}}" method="post">
@csrf
@include('ropa.form', ['modo'=>'Crear']);

</form>
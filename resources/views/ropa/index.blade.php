@extends('app')
@section('content')

<h1 class="text-primary">Lista de Calzado</h1>

@if(Session::has('mensaje')) 
{{Session::get('mensaje')}}
@endif

<a href="{{url('ropa/create')}}" class="btn btn-success">Ingresar nuevo calzado</a>

 <table class="table table-bordered" id="tableRopas">
   <thead>
     <tr>
         <th class="text-center">Id Calzado</th>
         <th class="text-center">Calzado</th>
         <th class="text-center">Tipo</th>
         <th class="text-center">Color</th>
         <th class="text-center">Talla</th>
         <th class="text-center">Marca</th>
         <th class="text-center">Gereno</th>
         <th class="text-center">Edad</th>
         <th class="text-center">Información</th>
         <th class="text-center">Borrar</th>
         <th class="text-center">Editar</th>
     </tr>
   </thead>
   <tbody>
     @foreach($ropa as $ropa)
         <tr>
             <td class="text-center">{{ $ropa->id}}</td>
             <td class="text-center">{{ $ropa->Calzado}}</td>
             <td class="text-center">{{ $ropa->Tipo}}</td>
             <td class="text-center">{{ $ropa->Color}}</td>
             <td class="text-center">{{ $ropa->Talla}}</td>
             <td class="text-center">{{ $ropa->Marca}}</td>
             <td class="text-center">{{ $ropa->Genero}}</td>
             <td class="text-center">{{ $ropa->Edad}}</td>
             <td style="text-align: center;">
                 <a href="{{ route('ropa.show', $ropa->id) }}" class="btn btn-info">Ver</a>
             </td>
             <td style="text-align: center;">
             <form action="{{url('/ropa/'.$ropa->id)}}" method="post">
                 @csrf
                 {{method_field('DELETE')}}

                 <input type="submit" onclick="return confirm('¿Desea borrar calzado?')" class="btn btn-danger" value="Borrar">
             </td>
             <td style="text-align: center;">
                 <a href="{{url('/ropa/'.$ropa->id.'/edit')}}" class="btn btn-success btn-block">Editar</a>
             </td>
              
         </tr>
     @endforeach
   </tbody>
   <tfoot>
     <tr>
       <th class="text-center">Id Calzado</th>
       <th class="text-center">Calzado</th>
       <th class="text-center">Tipo</th>
       <th class="text-center">Color</th>
       <th class="text-center">Talla</th>
       <th class="text-center">Marca</th>
       <th class="text-center">Gereno</th>
       <th class="text-center">Edad</th>
       <th class="text-center">Información</th>
       <th class="text-center">Borrar</th>
       <th class="text-center">Editar</th>
     </tr>
   </tfoot>
 </table>
 @stop
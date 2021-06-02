<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['ropa']=Ventas::paginate(100);
        return view('ropa.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ropa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosropa = request()->except('_token');
        Ventas::insert($datosropa);
        #return response()->json($datosropa);
        return redirect('ropa')->with('mensaje','Calzado registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function show($IDRopa)
    {
        //
        $ropas = Ventas::find($IDRopa);
        return view('ropa.show')->with('ropa', $ropas);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function edit($IDRopa)
    {
        //
        $ropa = Ventas::findOrFail($IDRopa);
        return view('ropa.edit', compact('ropa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $IDRopa)
    {
        //
        $datosropa = request()->except(['_token','_method']);
        Ventas::where('id','=',$IDRopa)->update($datosropa);

        $ropa = Ventas::findOrFail($IDRopa);
        return view('ropa.edit', compact('ropa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ventas  $ventas
     * @return \Illuminate\Http\Response
     */
    public function destroy($IDRopa)
    {
        //
        Ventas::destroy($IDRopa);
        return redirect('ropa');
    }
}

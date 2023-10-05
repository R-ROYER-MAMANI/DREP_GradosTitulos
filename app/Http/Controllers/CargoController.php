<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Agregamos
use App\Models\Cargo;

class CargoController extends Controller
{
    //Agregamos funcion de tipo constructor
    function __construct()
    {   //Definimos los permisos de roles
        $this->middleware('permission:ver-cargo|crear-cargo|editar-cargo|borrar-cargo')->only('index'); //Otra manera de codificar esta parte de linea de codigo
        $this->middleware('permission:crear-cargo', ['only'=>['create','store']]);
        $this->middleware('permission:borrar-cargo', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cargos = Cargo::paginate(5);
        return view('cargos.index', compact('cargos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cargos.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'NOMBRE_CARGO' => 'required',
        ]);
        Cargo::create($request->all());
        return redirect()->route('cargos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Cargo $cargo)
    {
        return view('cargos.editar', compact('cargo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cargo $cargo)
    {
        request()->validate([
            'NOMBRE_CARGO' => 'required',
        ]);
        $cargo->update($request->all());
        return redirect()->route('cargos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cargo $cargo)
    {
        $cargo->delete();
        return redirect()->route('cargos.index');
    }
}

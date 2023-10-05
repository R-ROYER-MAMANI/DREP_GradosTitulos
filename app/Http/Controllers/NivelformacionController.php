<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Agregamos
use App\Models\Nivelformacion;

class NivelformacionController extends Controller
{
    //Agregamos funcion de tipo constructor
    function __construct()
    {   //Definimos los permisos de roles
        $this->middleware('permission:ver-nivelformacion|crear-nivelformacion|editar-nivelformacion|borrar-nivelformacion')->only('index'); //Otra manera de codificar esta parte de linea de codigo
        $this->middleware('permission:crear-nivelformacion', ['only'=>['create','store']]);
        $this->middleware('permission:borrar-nivelformacion', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nivelformacions = Nivelformacion::paginate(5);
        return view('nivelformacions.index', compact('nivelformacions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nivelformacions.crear');
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
            'FORMACION' => 'required',
        ]);
        Nivelformacion::create($request->all());
        return redirect()->route('nivelformacions.index');
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
    public function edit(Nivelformacion $nivelformacion)
    {
        return view('nivelformacions.editar', compact('nivelformacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nivelformacion $nivelformacion)
    {
        request()->validate([
            'FORMACION' => 'required',
        ]);
        $nivelformacion->update($request->all());
        return redirect()->route('nivelformacions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivelformacion $nivelformacion)
    {
        $nivelformacion->delete();
        return redirect()->route('nivelformacions.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Agregamos
use App\Models\Nombreinstitucion;

class NombreinstitucionController extends Controller
{
    //Agregamos funcion de tipo constructor
    function __construct()
    {   //Definimos los permisos de roles
        $this->middleware('permission:ver-nombreinstitucion|crear-nombreinstitucion|editar-nombreinstitucion|borrar-nombreinstitucion')->only('index'); //Otra manera de codificar esta parte de linea de codigo
        $this->middleware('permission:crear-nombreinstitucion', ['only'=>['create','store']]);
        $this->middleware('permission:borrar-nombreinstitucion', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nombreinstitucions = Nombreinstitucion::paginate(5);
        return view('nombreinstitucions.index', compact('nombreinstitucions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nombreinstitucions.crear');
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
            'COD_MOD' => 'required',
            'IE_NOMBRE' => 'required',
        ]);
        Nombreinstitucion::create($request->all());
        return redirect()->route('nombreinstitucions.index');
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
    public function edit(Nombreinstitucion $nombreinstitucion)
    {
        return view('nombreinstitucions.editar', compact('nombreinstitucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nombreinstitucion $nombreinstitucion)
    {
        request()->validate([
            'COD_MOD' => 'required',
            'IE_NOMBRE' => 'required',
        ]);
        $nombreinstitucion->update($request->all());
        return redirect()->route('nombreinstitucions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nombreinstitucion $nombreinstitucion)
    {
        $nombreinstitucion->delete();
        return redirect()->route('nombreinstitucions.index');
    }
}

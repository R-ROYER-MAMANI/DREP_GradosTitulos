<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Agregamos
use App\Models\Usuarioadministrativo;
use App\Models\Cargo;

class UsuarioadministrativoController extends Controller
{
    //Agregamos funcion de tipo constructor
    function __construct()
    {   //Definimos los permisos de roles
        $this->middleware('permission:ver-usuarioadministrativo|crear-usuarioadministrativo|editar-usuarioadministrativo|borrar-usuarioadministrativo')->only('index'); //Otra manera de codificar esta parte de linea de codigo
        $this->middleware('permission:crear-usuarioadministrativo', ['only'=>['create','store']]);
        $this->middleware('permission:borrar-usuarioadministrativo', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarioadministrativos = Usuarioadministrativo::paginate(5);
        return view('usuarioadministrativos.index', compact('usuarioadministrativos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        //Con esto traemos los datos de las tablas relacionadas
        $cargos = Cargo::all();
        return view('usuarioadministrativos.crear', compact('cargos'));
        // return view('usuarioadministrativos.crear');
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
            'NOMBRE' => 'required',
            'APE_P' => 'required',
            'APE_M' => 'required',
            'DNI' => 'required',
        ]);
        Usuarioadministrativo::create($request->all());
        return redirect()->route('usuarioadministrativos.index');
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
    public function edit(Usuarioadministrativo $usuarioadministrativo)
    {
        return view('usuarioadministrativos.editar', compact('usuarioadministrativo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuarioadministrativo $usuarioadministrativo)
    {
        request()->validate([
            'NOMBRE' => 'required',
            'APE_P' => 'required',
            'APE_M' => 'required',
            'DNI' => 'required',
        ]);
        $usuarioadministrativo->update($request->all());
        return redirect()->route('usuarioadministrativos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuarioadministrativo $usuarioadministrativo)
    {
        $usuarioadministrativo->delete();
        return redirect()->route('usuarioadministrativos.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Agregamos
use App\Models\Usuariotitulado;
use App\Models\Nombreinstitucion;
use App\Models\Nivelformacion;
use App\Models\Usuarioadministrativo;

class UsuariotituladoController extends Controller
{
    //Agregamos funcion de tipo constructor
    function __construct()
    {   //Definimos los permisos de roles
        $this->middleware('permission:ver-usuariotitulado|crear-usuariotitulado|editar-usuariotitulado|borrar-usuariotitulado')->only('index'); //Otra manera de codificar esta parte de linea de codigo
        $this->middleware('permission:crear-usuariotitulado', ['only'=>['create','store']]);
        $this->middleware('permission:borrar-usuariotitulado', ['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuariotitulados = Usuariotitulado::paginate(5);
        return view('usuariotitulados.index', compact('usuariotitulados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Con esto traemos los datos de las tablas relacionadas
        $usuarioadministrativos = Usuarioadministrativo::all();
        $nivelformacions = Nivelformacion::all();
        $nombreinstitucions = Nombreinstitucion::all();
        return view('usuariotitulados.crear', compact('nombreinstitucions', 'nivelformacions', 'usuarioadministrativos'));

        // return view('usuariotitulados.crear');
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
            'APE_PAT' => 'required',
            'APE_MAT' => 'required', 
            'NOMBRES' => 'required',
            'DOCU_TIP' => 'required',
            'DOCU_NUM' => 'required',
            'NUM_TITU' => 'required',
            'NOMBRE_TITU' => 'required',
            'TITU_FEC' => 'required',
            'REG_TITU_NUM' => 'required',
            'RESO_TITU_NUM' => 'required',
            'REG_TITU_FEC' => 'required', 
            'REG_TITU_LIBRO' => 'required',
            'FOLIO_TITU_NUM' => 'required',
        ]);
        Usuariotitulado::create($request->all());
        return redirect()->route('usuariotitulados.index');
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
    public function edit(Usuariotitulado $usuariotitulado)
    {
        return view('usuariotitulados.editar', compact('usuariotitulado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuariotitulado $usuariotitulado)
    {
        request()->validate([
            'APE_PAT' => 'required',
            'APE_MAT' => 'required', 
            'NOMBRES' => 'required',
            'DOCU_TIP' => 'required',
            'DOCU_NUM' => 'required',
            'NUM_TITU' => 'required',
            'NOMBRE_TITU' => 'required',
            'TITU_FEC' => 'required',
            'REG_TITU_NUM' => 'required',
            'RESO_TITU_NUM' => 'required',
            'REG_TITU_FEC' => 'required', 
            'REG_TITU_LIBRO' => 'required',
            'FOLIO_TITU_NUM' => 'required',
        ]);
        $usuariotitulado->update($request->all());
        return redirect()->route('usuariotitulados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuariotitulado $usuariotitulado)
    {
        $usuariotitulado->delete();
        return redirect()->route('usuariotitulados.index');
    }

    public function search()
    {
        $search_text = $_GET['search'];
        $usuariotitulado = Usuariotitulado::where('DOCU_NUM','LIKE', '%'.$search_text.'%')->with('welcome')->get();

        return view('usuariotitulados.search',compact('usuariotitulado'));
    }
}

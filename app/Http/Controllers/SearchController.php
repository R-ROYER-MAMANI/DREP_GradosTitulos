<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Agregamos
use DB;
use Response;

class SearchController extends Controller
{
    public function show(Request $request)
    {
        $data = trim($request->valor);
        $result = DB::table('usuariotitulados')
        ->where('DOCU_NUM','like','%'.$data.'%')
        // ->orwhere('NOMBRES','like','%'.$data.'%')
        ->limit(10)
        ->get();

        return response()->json([
            "estado"=>1,
            "result" => $result
        ]);
    }
}

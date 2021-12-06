<?php

namespace App\Http\Controllers;

use App\Models\personas;
use App\Models\bancaria;
use App\Models\profesion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class personasController extends Controller
{
    //
    protected $profesion;

    public function __construct(profesion $profesion)
    {
        $this->profesion = $profesion;
    }
    public function index(){
       return view('gatos');
    }
    public function indexdos(Request $request){
        $gaston =$request->input('autocomplete');
        $nombre = personas::where("nombre", "like",$gaston."%")->first();
        //$nombre = personas::where("nombre", "like",$gaston."%")->first();
        $nombredos = $nombre['nombre'];
        $guarda = explode($gaston, $nombredos);
        header('Content-type: application/json; charset=utf-8');
        $jason = json_encode($guarda[1]);
        //$jason = json_encode($nombre);
        echo $jason;
      // return view('gatos');
    }
}

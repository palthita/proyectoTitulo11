<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Direccion;
use Illuminate\Http\Request;
use DB;
use DataTables;

class DireccionesController extends Controller
{        
     public function index(Request $request)
    {
          
    
        return view('welcome');
    }

        public function store(Request $request){

            $id_empresa=$request->id_empresa;
            $direccion=$request->direccion;
            $id_region=$request->id_region;
            $id_ciudad=$request->id_ciudad;
            $comuna=$request->comuna;

            $direcciones= new Direccion();
            $direcciones->id_empresa=$id_empresa;
            $direcciones->direccion=$direccion;
            $direcciones->id_ciudad=$id_ciudad;
            $direcciones->id_comuna=$comuna;

            $direcciones->save();
            

            return redirect()->route('index', ['id_empresa'=> $id_empresa,'direcciones'=> $direccion]);


        }
        public function getregion(){
        $region = DB::table('regiones')->get();
        return $region;

    }

    public function getciudad(request $request){
      
        $id_region=$request->id;
        $ciudades=DB::table('ciudades')->select('id','ciudad')->where('region_id',$id_region)->get();
        return $ciudades;

    }
    public function getcomuna(Request $request){
        $id_ciudad=$request->id_ciudad;
        $comunas=DB::table('comunas')->select('id','comuna')->where('ciudad_id',$id_ciudad)->get();
        return $comunas;
    }

     

}
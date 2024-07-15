<?php

namespace App\Http\Controllers;

use App\Establecimiento;
use App\Sistemas;
use App\TipoUsuario;
use App\Models\Empresas;
use App\Models\sistemasempresa;
use Illuminate\Http\Request;
use DB;
use DataTables;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
class SistemasController extends Controller
{
    public function guardar(request $request){      
        $codigo= $request->codigo_s;
        $existe_s =$this->valiSistema($codigo);
        $nombre=$request->nombre;
        $desc=$request->desc;
        $estado=$request->activo;

        if($existe_s){
                    $mensaje="Sistema ya existe";
                    $update = DB::table('sistemas')
                    ->where('CODIGO_SISTEMA', $codigo)
                    ->update(['NOMBRE' => $nombre,'DESCRIPCION_SISTEMA'=>$desc,'ESTADO_SISTEMA' =>$estado]);
                    $notification = array(
                        'message'    => 'Sistema ' . $nombre . ' Actualizado',
                        'alert-type' => 'success',
                    );
                    return response()->json($notification);
        
                }else{
                    $sistema= new Sistemas();
                $sistema->CODIGO_SISTEMA=$codigo;
                $sistema->NOMBRE=$nombre;
                $sistema->DESCRIPCION_SISTEMA=$desc;
                $sistema->ESTADO_SISTEMA=$estado;
                            
                $sistema->save();
        
                    $notification = array(
                        'message'    => 'Sistema ' . $nombre . ' Ingresado',
                        'alert-type' => 'success',
                    );
                    return response()->json($notification);

        }

    }
    private function valiSistema(string $codigo){
      
        $var=DB::table('sistemas')->select('CODIGO_SISTEMA')->where('CODIGO_SISTEMA',$codigo)->first();
         return ($var != null) ? true: false;
    }
    public function gettablaSistema(Request $request){
      
        $detalle=DB::table('sistemas')
        ->select('sistemas.id','sistemas.CODIGO_SISTEMA','sistemas.NOMBRE','sistemas.DESCRIPCION_SISTEMA','sistemas.ESTADO_SISTEMA')
        ->get();
        return Datatables::of($detalle)
        ->addColumn('action', function ($detalle) {
            $estado = $detalle->ESTADO_SISTEMA;

            $action = "<button type='button' class='btn btn-primary dropdown-toggle' data-bs-toggle='dropdown'>
            Acciones
          </button><ul class='dropdown-menu'>
          <li><a class='dropdown-item'  onclick='cargaDetalleSistemas(". $detalle->id .");' href='#'>Modificar</a></li>
          <li><a class='dropdown-item' onclick='eliminarSistemas(".$detalle->id.");' href='#'>Eliminar</a></li>
        </ul>";
            return $action;
        })
        ->editColumn('ESTADO_SISTEMA', function ($detalle) {
            if($detalle->ESTADO_SISTEMA==1){
                return  "ACTIVO";
             }else if($detalle->ESTADO_SISTEMA==2){
                 return  "SUSPENDIDO";
             }
         })
           
            ->make(true); 

  }
  public function loadSistemas(Request $request){
    $id = $request->id;
        $sistemas = DB::table('sistemas')
        ->select('NOMBRE')->where('id', $id)->get();

        return $sistemas;
}
public function loadSistemasEmpresa(Request $request){
    $id = $request->id;
    $detalle=DB::table('sistemasempresa')
    ->join('sistemas', 'sistemasempresa.idSistema', '=', 'sistemas.id')
    ->join('empresas','sistemasempresa.idEmpresa','=','empresas.id')
    ->select('sistemasempresa.id','sistemas.NOMBRE','sistemasempresa.estado')
    ->get();


        return $detalle;
}
public function eliminarSistemas(Request $request){
    $id =$request->id;
    $sistemas = Sistemas::find($id);
   
        $elimina =  DB::table('sistemas')       
        ->where('id',$id)->delete();     

        $notification="Se elimino Sistema";
    return response()->json($notification);
    }
    public function cargaSistemas(Request $request){
        $var=DB::table('tipo_usuarios')->get();
        return $var;
    }
    

}


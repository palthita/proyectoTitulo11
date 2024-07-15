<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use App\Models\Empresas;
use Sistemas;
use App\Models\sistemasempresa;

use DataTables;

class EmpresasController extends Controller
{
public function guardarEmpresa(Request $request){
            $rutEmpresa =$request->rutEmpresa;   
            $nombreEmpresa=$request->nombreEmpresa;
            $giroEmpresa=$request->giroEmpresa;
            $direccionEmpresa=$request->direccionEmpresa;
            $idComuna=$request->comuna;
            $idCiudad=$request->id_ciudad;
            $idRegion=$request->id_region;
            $estado=$request->estado;         
            
            if($empresa = Empresas::where('rutEmpresa', $rutEmpresa)->first() != null){
                $mensaje="Empresa ya existe";
                            $update = DB::table('empresas')
                            ->where('rutEmpresa', $rutEmpresa)
                            ->update(['direccionEmpresa' => $direccionEmpresa,'idComuna' =>$idComuna,'idCiudad' => $idCiudad,'idRegion'=>$idRegion,'estado'=>$estado]);
                            $id = Empresas::where('rutEmpresa', $rutEmpresa)->select('id')->first();

                            $notification = array(
                                'message'    => 'Datos Empresa ' . $nombreEmpresa . ' Actualizados',
                                'alert-type' => 'success',
                            );
                            $respuesta = ['id' => $id, 'notification'=>$notification];
                            return $respuesta; 
    
                        }else{
                            $empresa= new Empresas();
                            $empresa->rutEmpresa=$rutEmpresa;
                            $empresa->nombreEmpresa=$nombreEmpresa;
                            $empresa->giroEmpresa=$giroEmpresa;
                            $empresa->direccionEmpresa=$direccionEmpresa;
                            $empresa->idComuna=$idComuna;
                            $empresa->idCiudad=$idCiudad;
                            $empresa->idRegion=$idRegion;
                            $empresa->estado=$estado;
                            $empresa->save();
                            $id = Empresas::where('rutEmpresa', $rutEmpresa)->select('id')->first();
                            $notification = array(
                                'message'    => 'Empresa :' . $nombreEmpresa . ' Ingresada',
                                'alert-type' => 'success',
                            );
                            $respuesta = ['id' => $id, 'notification'=>$notification];
                            return $respuesta; 
    
            }
}
public function eliminarEmpresa(Request $request){
    $id =$request->id;
    $emandante = Empresas::find($id);
    
        $elimina =  DB::table('empresas')->where('id',$id)->delete();

        $notification="Empresa Eliminado";

        return response()->json($notification);

}
public function loadEmpresas(Request $request){
    $id = $request->id;
        $empresa = DB::table('empresas')
        ->select()->where('id', $id)->first();
        return $empresa;
}      
public function muestraSistemas(Request $request){
    $id = $request->id;
        $verifica = DB::table('sistemasempresa')
        ->select()->where('idEmpresa', $id)->get();
        return $verifica;
}  

public function buscaEmpresa(Request $request){
    $var=DB::table('empresas')->get();
    return $var;
}     

    public function detalleEmpresa(){      
        $detalle=DB::table('empresas')
                ->select()//->where('id_tipousuario','!=',3)
                ->get();
                return Datatables::of($detalle) 
                ->addColumn('action', function ($detalle) {
                    $estado = $detalle->estado;

                    $action = "<button type='button' class='btn btn-inverse-primary btn-fw dropdown-toggle' data-bs-toggle='dropdown'>
                    Acciones
                </button><ul class='dropdown-menu'>
                <li><a class='dropdown-item'  onclick='listaSistemas(". $detalle->id .");'  href='#' data-bs-toggle='modal' data-bs-target='#modalAsignaSistemas'>Asignar Sistemas</a></li>
                <li><a class='dropdown-item'  onclick='cargaDetalle(". $detalle->id .");' href='#'>Modificar</a></li>
                <li><a class='dropdown-item' onclick='eliminarEmpresa(".$detalle->id.");' href='#'>Eliminar</a></li>
                </ul>";
                    return $action;
                })
            
                ->editColumn('estado', function ($detalle) {
                    if($detalle->estado==1){
                        return  "ACTIVA";
                    }else if($detalle->estado==2){
                        return  "SUSPENDIDA";
                    }
                })
                
                    ->make(true);
  
    }         
public function asociaSistemas(Request $request){      
   
        $detalle=DB::table('sistemas')
            ->select()//->where('id_tipousuario','!=',3)
            ->where('ESTADO_SISTEMA',1)
            ->get();
            return Datatables::of($detalle) 
            ->addColumn('action', function ($detalle) {
                $action = "<button type='button' class='btn btn-success btn-fw' id='btnAsocia' onclick='asociaSistema(". $detalle->id .");'>Asignar</button>";
                return $action;
            })
            ->make(true);
         
    
   
  
} 
public function muestraSistemasActivos(Request $request){      
   $empresaId = $request->idEmpresa;
   $buscaSistemas =sistemasempresa::where('idEmpresa', $empresaId)->get();

        $detalle=DB::table('sistemas')
        ->select()//->where('id_tipousuario','!=',3)
        ->where('ESTADO_SISTEMA',1)
        ->get();
        
        if($buscaSistemas == null){
            return Datatables::of($detalle) 
        ->addColumn('action', function ($detalle) {
            $action = "<button type='button' class='btn btn-success btn-fw' id='btnAsocia' onclick='asociaSistema(". $detalle->id .");'>Asignar</button>";
            return $action;
        })
        ->make(true);
    }else{
        while($buscaSistemas){
            return Datatables::of($detalle) 
            ->addColumn('action', function ($detalle) {
                $action = "<button type='button' class='btn btn-success btn-fw' id='btnAsocia' onclick='asociaSistema(". $detalle->id .");'>Desactivar</button>";
                return $action;
            })
            ->make(true);
        }
       
       
    }
        
   
    
     



} 
public function asignaSistemaEmpresa(Request $request){
    $idEmpresa =$request->idEmpresa;   
    $idSistema=$request->idSistema;
    $estado=2;
    if(sistemasempresa::where('idSistema',$idSistema)->where('idEmpresa',$idEmpresa)->get() == null){
        $estado = 1;

                    $asignaSistema= new sistemasempresa();
                    $asignaSistema->idEmpresa=$idEmpresa;
                    $asignaSistema->idSistema=$idSistema;
                    $asignaSistema->estado=$estado;
                  $id =  $asignaSistema->id;
                    $asignaSistema->save();
                    $notification = array(
                        'message'    => 'Sistema asignado :' . $id . ' Ingresada',
                        'alert-type' => 'success',
                    );
                    $respuesta = ['id'=>$id,'idSistema'=>$idSistema,'notification'=>$notification];
                    return $respuesta; 
                }else{
                    $detalle=DB::table('sistemasempresa')
                    ->select('estado')
                    ->where('idSistema',$idSistema)
                    ->first();
                     $estado =$detalle->estado;
                    if ($estado== 1){
                        $update = DB::table('sistemasempresa')
                        ->where('idSistema', $idSistema)
                        ->update(['estado' =>2]);
                        $notification = array(
                            'message'    => 'Sistema desvinculado',
                            'alert-type' => 'success',
                        );
                        $respuesta = ['id'=>$idSistema,'idSistema'=>$idSistema,'notification'=>$notification];
                        return $respuesta; 
                    }else{
                        $update = DB::table('sistemasempresa')
                        ->where('idSistema', $idSistema)
                        ->update(['estado' =>1]);
                        $notification = array(
                            'message'    => 'Sistema desvinculado',
                            'alert-type' => 'success',
                        );
                        $respuesta = ['id'=>$idSistema,'idSistema'=>$idSistema,'notification'=>$notification];
                        return $respuesta; 
                    }
                    

                }
    
}
}

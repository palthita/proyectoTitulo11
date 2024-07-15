<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use DataTables;
use App\Models\User;
use App\TipoUsuario;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Crypt;

class UserController extends Controller
{
    
    public function guardaUsuario(Request $request){
        $nombre=$request->nombre;
        $mail=$request->mail;
        $existecuenta =$this->validacuenta($mail);
        $password=$request->pass;
        $pass=hash::make($password);
        $id_tipousuario=$request->id_tipousuario;
        $estado =$request->estado;
        
        if( $existecuenta){
            $mensaje="Usuario ya existe";
                        $usuarios = DB::table('users')->select('id')->where('email',$mail)->first();
                        $id=$usuarios->id;
                        $update = DB::table('users')
                        ->where('email', $mail)
                        ->update(['name' => $nombre,'password' =>$pass,'idTipoUsuario' => $id_tipousuario,'estado'=>$estado]);
                        $notification = array(
                            'message'    => 'Usuario ' . $mail . ' Actualizado',
                            'alert-type' => 'success',
                        );
                        return response()->json($notification);

                    }else{
                        $usuario= new User();
                        $usuario->name=$nombre;
                        $usuario->email=$mail;
                        $usuario->password=$pass;
                        $usuario->idTipoUsuario=$id_tipousuario;
                        $usuario->estado=$estado;
                    $usuario->save();
            
                        $notification = array(
                            'message'    => 'Usuario :' . $mail . ' Ingresado',
                            'alert-type' => 'success',
                        );
                        return response()->json($notification);

        }
     }
public function cuentaUsuarios(){
        $usuarios = User::select('id')->where('estado',1)->count();
        return $usuarios;
    }
 public function buscausuario(Request $request){
        $var=DB::table('users')->get();
        return $var;
    }
     
     private function validacuenta(string $mail){
        $var          = User::where('email', $mail)->first();         
          return ($var != null) ? true: false;
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

public function getusuarios(Request $request){
        $var=DB::table('usuarios')->where('estado',1)->where('idTipoUsuario',6)->get();
        return $var;

    }
 
  public function loadusuario(Request $request){
        $id = $request->id;
            $emandante = DB::table('users')
            ->select('name','email','password','idTipoUsuario','estado')->where('id', $id)->get();

            return $emandante;
    }
    public function eliminarUsuario(Request $request){
        $id =$request->id;
        $emandante = User::find($id);
        $estado = $emandante->activo;
        
            $elimina =  DB::table('users')->where('id',$id)->delete();
    
            $notification="Usuario Eliminado";
    
            return response()->json($notification);
    
    }
 public function vistausuario(Request $request){
        $cuenta =$request->$mail;
        $existecuenta =$this->validacuenta($cuenta);
       $pass = $request->pass;
        if( $existecuenta){
            $var=DB::table('users')->select('password','id_tipousuario')->where('email',$cuenta)->first();
            $aux_pass = $var->clave;
            $t_usuario = $var->id_tipousuario;
            if($pass == $aux_pass){
                if($t_usuario == 1){
                    return redirect()->route('menu.blade')->with($cuenta);                   

                }else if ($t_usuario ==2){
                    return redirect()->route('menuadmin.blade')->with($cuenta);

                }else if ($t_usuario ==3){

                }else if ($t_usuario ==4){

                }
            }
                
        }

    }
    public function getdetalleUsuario(){      
        $detalle=DB::table('users')
                ->select('id','idTipoUsuario','name','email','estado')//->where('id_tipousuario','!=',3)
                ->get();
                return Datatables::of($detalle) 
                ->addColumn('action', function ($detalle) {
                    $estado = $detalle->estado;

                    $action = "<button type='button' class='btn btn-primary dropdown-toggle' data-bs-toggle='dropdown'>
                    Acciones
                  </button><ul class='dropdown-menu'>
                  <li><a class='dropdown-item'  onclick='cargaDetalleUsuario(". $detalle->id .");' href='#'>Modificar</a></li>
                  <li><a class='dropdown-item' onclick='eliminarUsuario(".$detalle->id.");' href='#'>Eliminar</a></li>
                </ul>";
                    return $action;
                })
                ->editColumn('idTipoUsuario', function ($detalle) {
                   if($detalle->idTipoUsuario==2){
                        return  "";
                    }else if($detalle->idTipoUsuario==3){
                        return  "OWNER";
                    }else if($detalle->idTipoUsuario==5){
                    return  "ADMINISTRADOR";
                    } else if($detalle->idTipoUsuario==6){
                        return  "SUPERVISOR";
                        }
                })
                ->editColumn('estado', function ($detalle) {
                    if($detalle->estado==1){
                        return  "ACTIVO";
                     }else if($detalle->estado==2){
                         return  "SUSPENDIDO";
                     }
                 })
                   
                    ->make(true);
      
    }
    public function import(Request $request){


        Excel::import(new UsersImport,request()->file('file1'));
          
        return redirect()->route('usuariosadmin.blade');
        /*
      validar el archivo con try catch
       }*/

   }
      //Tipo usuarios
  public function buscaTipoUsuario(Request $request){
    $var=DB::table('tipo_usuarios')->get();
    return $var;
}

public function detalleTipoUsuario(){      
    $detalle=DB::table('tipo_usuarios')->get();
            return Datatables::of($detalle) 
            ->addColumn('action', function ($detalle) {                  

                $action = "";
                $action = "<button onclick='cargaDetalleTipoUsuario(". $detalle->id .");' type='button' class='btn btn-primary btn-sm'> Modificar </button>&nbsp"  ;
                $action .= "<button id='estado' name='estado' onclick='eliminar(".$detalle->id.");' type='button' class='btn btn-primary btn-sm' >Eliminar</button>";
                return $action;
            })               
               
                ->make(true);
  
}

public function guardaTipoUsuario(Request $request){
  
    $idTipoUsuario= $request->TipoUsuario;
    $nombre=$request->nombre;
    if($idTipoUsuario == null){
        $usuario= new TipoUsuario();
        $usuario->nombre=$nombre;
        $usuario->save();

        $notification = array(
            'message'    => 'Tipo Usuario :' . $nombre . ' Ingresado',
            'alert-type' => 'success',
        );
        return response()->json($notification);
    }else{
        $mensaje="Tipo de usuario existente,se actualizara nombre";
        $update = DB::table('tipo_usuarios')
        ->where('id', $idTipoUsuario)
        ->update(['nombre' => $nombre]);
        $notification = array(
            'message'    => 'Tipo usuario ' . $nombre . ' Actualizado',
            'alert-type' => 'success',
        );
        return response()->json($notification);
    }
                    

    
 }
 public function loadTipoUsuarios(Request $request){
    $id = $request->id;
        $emandante = DB::table('tipo_usuarios')
        ->select('nombre')->where('id', $id)->get();

        return $emandante;
}
public function eliminarTipoUsuarios(Request $request){
    $id =$request->id;
    $tipoUsuario = TipoUsuario::find($id);
   
        $elimina =  DB::table('tipo_usuarios')       
        ->where('id',$id)->delete();     

        $notification="Se elimino registro";
    return response()->json($notification);
    }
}

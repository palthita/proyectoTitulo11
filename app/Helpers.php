<?php
use App\Models\User;
use App\Models\Empresas;
use App\Sistemas;

function getregiones(){
    $region = DB::table('region')->get();
    return $region;
}
function getciudad(){
    $ciudad = DB::table('ciudades')->get();
    return $ciudad;
}
function cuentaUsuarios(){
    $usuarios = User::select('id')->where('estado',1)->count();
    return $usuarios;
}
function cuentaEmpresas(){
    $usuarios = Empresas::select('id')->where('estado',1)->count();
    return $usuarios;
}
function cuentaSistemas(){
    $usuarios = Sistemas::select('id')->where('ESTADO_SISTEMA',1)->count();
    return $usuarios;
}
function getEmpresas(){
    $ciudad = DB::table('empresas')->where('estado',1)->get();
    return $ciudad;
}
function getcomuna(){
    $comunas = DB::table('comunas')->get();
    return $comunas;
}
function gettipousuario(){
	$var=DB::table('tipo_usuarios')->get();
	return $var;
}
function getSistemas(){
	$var=DB::table('sistemas')->get();
	return $var;
}

function getUsuarios(){
    /* muestra usuario supervisor en configEmpresas.blade*/
	$var=DB::table('users')->where('estado',1)->where('idTipoUsuario',6)->get();
	return $var;
}
function getEstado(){
	$var=DB::table('estado')->get();
	return $var;
}
function getestudiantes(){
	$var=DB::table('estudiantes')->get();
	return $var;
}

function limpiar_caracteres($texto){
    $texto = str_replace(".","",$texto);
    $texto = str_replace(" ","",$texto);
    return $texto;
}
function getUserTipo(){
    if (session()->get('idTipoUsuario') == null) {
     session(['idTipoUsuario' => Auth::user()->idTipoUsuario]);
        return Auth::user()->idTipoUsuario;
    } else {
        return session()->get('idTipoUsuario');
    }

}

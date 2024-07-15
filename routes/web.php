<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SistemasController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/', function () {
    return redirect()->route('welcome.blade');
    

});

Auth::routes();
Route::group(['middleware' => 'auth'], function () {
    Route::get('/inicio', function () {return view('welcome');})->name('welcome.blade');
    Route::get('/usuarios', 'UserController@getusuarios')->name('usuarios');
Route::get('/vista', 'UserController@vistausuario')->name('tipovista');
Route::get('/adminusuarios', function () {return view('usuariosadmin');})->name('usuariosadmin.blade');
Route::get('/Empresas', function () {return view('empresas');})->name('empresas.blade');
Route::get('/ConfigEmpresas', function () {return view('configEmpresas');})->name('configEmpresas.blade');
Route::get('/sistema', function () {return view('sistemas');})->name('sistemas.blade');
Route::get('/tipoUsuario', function () {return view('tipoUsuario');})->name('tipoUsuario.blade');
Route::get('sistemas', [SistemasController::class, 'guardar']);
Route::get('/asigna_estado', function () {return view('layouts.eDis');})->name('eDis.blade');


/*importadores mantenedores*/
/*Route::post('/importador/emandante', 'EmandanteController@import')->name('importa.esmasivo');
Route::post('/importador/establecimiento', 'EstablecimientoController@import')->name('importa.colegiomasivo');*/
Route::post('/importador/user', 'UserController@import')->name('importa.usuariosmasivo');
/*busca datos*/
Route::get('/search/buscaTipoUsuario', 'UserController@buscaTipoUsuario')->name('buscaTipoUsuario');
Route::get('/search/buscaUsuarios', 'UserController@buscaUsuario')->name('buscaUsuario');
Route::get('/search/buscaEmpresa', 'EmpresasController@buscaEmpresa')->name('buscaEmpresa');
Route::get('/search/sistemas', 'SistemasController@buscaSistema')->name('buscadatos.sistema');
/*Route::get('/search/cursos', 'CursosController@buscac')->name('buscadatos.cursos');
Route::get('/search/estudiantes', 'EstudiantesController@buscaestudiantes')->name('buscadatos.estudiantes');
Route::get('/search/lenguan', 'EstudiantesController@lengual')->name('buscadatos.l');
Route::get('/search/fichaestudiantes', 'FmedicaController@buscafmedica')->name('buscadatos.festudiantes');
Route::get('/search/especialidades', 'EspecialidadesController@buscaespecialidades')->name('buscadatos.especialidades');
Route::get('/search/mandante', 'EmandanteController@buscaemandante')->name('buscadatos.emandante');
Route::get('/search/establecimiento', 'EstablecimientoController@buscaestablecimiento')->name('buscadatos.establecimiento');
Route::get('/search/config', 'EstablecimientoController@config')->name('config.establecimiento');
Route::get('/search/medicos', 'PmedicoController@buscamedicos')->name('buscadatos.medicos');
Route::get('/search/fichas', 'FmedicaController@buscaficha')->name('busca.fichae');
Route::get('/search/fichas/estudiantes', 'FmedicaController@festudiantes')->name('fichas.estudiantes');
Route::get('/ficha/detalle/estudiantes', 'FmedicaController@festudiantesdetalle')->name('fichas.detalle');
Route::get('/libro/curso', 'EstudiantesController@libro')->name('libro.estudiantes');*/
Route::get('/comuna', 'DireccionesController@getcomuna')->name('comuna');
Route::get('/region', 'DireccionesController@getregion')->name('region');
Route::get('/ciudad', 'DireccionesController@getciudad')->name('ciudad');
/*guarda datos*/
Route::get('/guardar/Usuario', 'UserController@guardaUsuario')->name('guardaUsuario');
Route::get('/guardar/TipoUsuario', 'UserController@guardaTipoUsuario')->name('guardaTipoUsuario');
Route::get('/guardar/Sistema', 'SistemasController@guardar')->name('guardar');
Route::get('/guardar/Empresa', 'EmpresasController@guardarEmpresa')->name('guardarEmpresa');

/*Route::get('/gusuarios', 'MatriculasController@guarda')->name('guarda.matricula');
Route::get('/guardar/curso', 'CursosController@guarda')->name('guarda.cursos');
Route::get('/guardar/estudiantes', 'EstudiantesController@guarda')->name('guarda.estudiantes');
Route::get('/guardar/lenguan', 'EstudiantesController@guardalenguan')->name('guarda.lenguan');
Route::get('/guardar/ficha', 'FmedicaController@guarda')->name('guarda.ficha');*/
/*detalle usuarios*/
Route::get('/detalle/usuarios', 'UserController@getdetalleUsuario')->name('getdetalleUsuario');
/*detalle tipousuario*/
Route::get('/detalle/tipoUsuario', 'UserController@detalleTipoUsuario')->name('detalleTipoUsuario');

/* Carga datos*/
/*Route::get('/busca/establecimiento', 'EstablecimientoController@establecimientoc')->name('cargaestablecimiento');
Route::get('/show/establecimiento/{id}', 'EstablecimientoController@show')->name('establecimiento.show');
Route::get('/carga/estudiantes','EstudiantesController@loadestudiantes')->name('load.estudiantes');
Route::get('/carga/estudiantes/matricula','EstudiantesController@loadmatricula')->name('load.estudiantes1');
Route::get('/carga/matriculas','MatriculasController@buscae')->name('load.matriculas');
Route::get('/carga/ficha2','FmedicaController@ficha')->name('carga.fichae');
Route::get('/carga/emandante','EmandanteController@loademandante')->name('load.emandante');*/
Route::get('/carga/usuarios','UserController@loadusuario')->name('loadUsuarios');
Route::get('/carga/tipoUsuario','UserController@loadTipoUsuarios')->name('loadTipoUsuarios');
Route::get('/carga/Sistemas','SistemasController@loadSistemas')->name('loadSistemas');
Route::get('/carga/Empresa','EmpresasController@loadEmpresas')->name('loadEmpresas'); 
Route::get('/carga/SistemasEmpresa','SistemasController@loadSistemasEmpresa')->name('loadSistemasEmpresa'); 

/*Route::get('/carga/establecimiento','EstablecimientoController@loadestablecimiento')->name('load.establecimiento');*/
/*eliminar*/
Route::get('/eliminar/usuarios', 'UserController@eliminarUsuario')->name('eliminarUsuario');
Route::get('/eliminar/tipoUsuario','UserController@eliminarTipoUsuarios')->name('eliminarTipoUsuarios');
Route::get('/eliminar/Sistemas','SistemasController@eliminarSistemas')->name('eliminarSistemas');
Route::get('/eliminar/Empresa','EmpresasController@eliminarEmpresa')->name('eliminarEmpresa');
/*Asocia sistemas empresa*/
Route::get('/asociaSistemaEmpresa', 'EmpresasController@asignaSistemaEmpresa')->name('asignaSistemaEmpresa');

/*Route::get('/eliminar/emandante', 'EmandanteController@delete')->name('eliminar.emandante');
Route::get('/eliminar/establecimiento', 'EstablecimientoController@delete')->name('eliminar.establecimiento');
Route::get('/eliminar/especialidades', 'EspecialidadesController@delete')->name('eliminar.especialidades');
Route::get('/eliminar/medico', 'PmedicoController@delete')->name('eliminar.medico');
Route::get('/eliminar/estudiantes', 'EstudiantesController@delete')->name('eliminar.estudiantes');
Route::get('/eliminar/lengua', 'EstudiantesController@deletel')->name('eliminar.lengua');
Route::get('/eliminar/curso', 'CursosController@delete')->name('eliminar.curso');*/
/*datatables*/
Route::get('/tabla/Sistema', 'SistemasController@gettablaSistema')->name('detalleSistemas');
Route::get('/tabla/Usuario', 'UserController@cargaDetalleUsuario')->name('cargaDetalleUsuario');
Route::get('/tabla/Empresa', 'EmpresasController@detalleEmpresa')->name('detalleEmpresa');
Route::get('/tabla/TipoUsuario', 'UserController@detalleTipoUsuario')->name('detalleTipoUsuario');
Route::get('/tabla/AsociaSistema', 'EmpresasController@asociaSistemas')->name('asociaSistemas');
Route::get('/tabla/muestraSistemas', 'EmpresasController@muestraSistemasActivos')->name('muestraSistemasActivos');

/* busca Sistemas asociados a empresa*/
Route::get('/Empresas/Sistemas', 'EmpresasController@muestraSistemas')->name('muestraSistemas');


});
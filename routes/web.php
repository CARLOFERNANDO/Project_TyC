<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Alumno;
use App\Usuario;
/* Route::get('/', function () {
    return view('index');
});*/

Route::get('/prueba', function () {
    return view('vistas3.administrador_modulos_todos');
});
Route::get('/homeadmin',function(){
    return view('index');
} );

// *********** GESTION DE PERIODOS ACADEMICOS E HISTORIAL******************************* //
Route::resource('periodo','PeriodoController');
Route::get('/infogeneral','PeriodoController@mostrar_datos_generales');
Route::get('/obtenerHistorialGeneral/{id}','PeriodoController@obtener_DatosGenerales');
Route::get('/historialmodulos','PeriodoController@mostrar_datos_modulo');
Route::get('/obtenerDatosModulo/{id}','PeriodoController@obtener_datos_modulo');



/*          RUTAS PARA LA GESTION DE PROFESOR
Route::get('/registrar_profesor', 'ProfesorController@registrar');
Route::get('/modificar_profesor', 'ProfesorController@modificar');
Route::get('/crear_profesor', 'ProfesorController@store');
*/


Route::resource('profesor','ProfesorController');
Route::get('/editar_profesor','ProfesorController@edit_inicial' );
Route::post('/modificarprofesor','ProfesorController@modificar' );
Route::get('/obtenerProfesor/{id}','ProfesorController@obtenerProfesor' );

Route::get('/perfilprofesor','ProfesorController@verPerfil' );
Route::get('/modulosprofesor','ProfesorController@verModulos' );
Route::get('/ingresanotas','ProfesorController@ingresarNotas' );
Route::get('/cambiocontraseña','ProfesorController@cambiarContraseña' );
Route::get('/alumnosXmodulo/{id_grupo}','ProfesorController@mostrarAlumnos_modulo' );
Route::post('/registrarnomina','ProfesorController@registrar_nomina' );
Route::get('/listarProfesores','ProfesorController@lista_profesores' );

Route::get('/profesor_inicio','ProfesorController@index')->name('profesor.index');


/*  RUTAS PARA LA GESTION DE GRUPOS */
Route::resource('grupo','GrupoController');
Route::get('/obtenergrupos/{id}','GrupoController@listarGrupos');
Route::get('/obtenergrupo/{id}','GrupoController@BuscarGrupo');

/*  RUTAS PARA LA GESTION DE MATRICULA */
Route::resource('matricula','MatriculaController');
Route::get('/traerfrecuencia/{id}','MatriculaController@obtenerFrecuencia');
Route::get('/traerturno/{id}','MatriculaController@obtenerTurno');

Route::get('/consultarMatriculados',function(){
    return view('alumno_matriculados');
});

Route::get('/reportes/alumnos','MatriculaController@mostrarMatriculados')->name('reporte.alumnos');

Route::get('/visualizarMatricula','MatriculaController@visualizarMatricula');
/*  RUTAS PARA LA GESTION DE ALUMNOS */
Route::resource('alumno','AlumnoController');
Route::get('/administrador_inicio','AlumnoController@index')->name('admi.index');

/**
 *  DISTINAS RUTAS PARA LA GESTION DEL MODULO
 */
Route::get('/showRegistroModulo','ModuloController@showRegistroModulo');
Route::post('/registrarModulo','ModuloController@registrarModulo');
Route::get('/showModulos','ModuloController@mostrarModulos');
//Route::get('/getModulo/{id}','ModuloController@getModulo');
//Route::post('/editarModulo/{id}','ModuloController@editarModulo');
//Route::post('borrarModulo/{id}','ModuloController@borrarModulo');


/**
 * DISTINTAS RUTAS PARA LA GESTION DE LAS FAMILIAS PROFESIONALES
 */
Route::get('/showRegistroFamiliaProfesional','FamiliaprofesionalController@showRegistroFam');
Route::post('/registrarFamiliaProfesional','FamiliaprofesionalController@registrarFamiliaPro');
//Route::get('/showFamiliaProfesional','FamiliaprofesionalController@showFamiliaPro');


/**
  * DISTINTAS RUTAS PARA LA GESTION DE LAS OPCIONES OCUPACIONALES
  */
Route::get('/showRegistroOpcionOcupacional','OpcionocupacionalController@showRegistroOpcionOcup');
Route::post('/RegistroOpcionOcupacional','OpcionocupacionalController@registroOpcionOcup');



/**
 * |
 * | GESTIONAR LA VISTA POR PARTE DEL ALUMNO
 * |
 */

Route::get('/mostrarDetalleMatricula/{idgrupo}','GAlumnoMatriculaController@mostrarDetalleMatricula')->name('matricula.detalle');
Route::get('/alumnoIndex','GAlumnoMatriculaController@index')->name('alumno.index');
Route::get('/alumnoReporteMatricula','GAlumnoMatriculaController@reporteMatricula')->name('reporte.matricula');
Route::get('/informacion','GAlumnoMatriculaController@perfil')->name('alumno.perfil');
Route::get('/verReporteNotas/{id}','GAlumnoMatriculaController@mostrarReporteNotas')->name('reporte.nomina');
Route::get('/reporteEvaluaciones','GAlumnoMatriculaController@reporteEvaluaciones')->name('reporte.evaluaciones');

/**
 *  PDF
 */
Route::get('/perfilPDF','PdfController@perfilPDF')->name('perfil.pdf');
Route::get('/matriculaPDF/{idgrupo}/{id}','PdfController@matriculaPDF')->name('matricula.pdf');


/**
 * LOGIN   
 */

Route::get('/','Auth\LoginController@showLoginForm');
Route::post('login','Auth\LoginController@login')->name('login');
Route::get('logout','Auth\LoginController@logout')->name('logout');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

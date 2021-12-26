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

Route::get('/', function () {
    return view('welcome');
});

//Alumnos
Route::get('ver','AlumnoControlador@ver')->name('ver');
Route::get('guardar','AlumnoControlador@guardar')->name('guardar');
Route::get('consulta','AlumnoControlador@consulta')->name('consulta');
Route::get('buscar','AlumnoControlador@consulta')->name('buscar');
Route::get('buscar2','AlumnoControlador@consulta2')->name('buscar2');
Route::get('pdf','AlumnoControlador@pdf')->name('pdf');
Route::get('consulta2','AlumnoControlador@consulta2')->name('consulta2');
Route::get('excel','AlumnoControlador@excel')->name('excel');
Route::get('excel2','AlumnoControlador@excel2')->name('excel2');
Route::get('sexof','AlumnoControlador@sexof')->name('sexof');
Route::get('sexom','AlumnoControlador@sexom')->name('sexom');

Route::get('excelc','AlumnoControlador@excelc')->name('excelc');


Route::get('subir',function(){
    return view('vista_excel');
    })->name('subir');

Route::post('importar','AlumnoControlador@importar')->name('importar');  

// Route::get('email','AlumnoControlador@enviar')->name('email');


//email

Route::get('enviare', function(){
    return view('vista_envio');
})->name('enviare');

Route::POST('enviar', 'EmailController@enviar')->name('enviar');

//subir archivos
Route::get('subir2', function(){
    return view('vista_subir');
})->name('subir2');

Route::POST('subira', 'EmailController@subira')->name('subira');


//Restaurar contraseña via email
Route::get('recuperar', function(){
    return view('vista_restaurar');
})->name('recuperar');

Route::post('restaurar', 'EmailController@restaurar')->name('restaurar');




//Maestros
Route::get('ConsultaM','MaestroController@ConsultaM')->name('ConsultaM');
Route::get('PDFM','MaestroController@PDFM')->name('PDFM');
Route::get('EXCELM','MaestroController@EXCELM')->name('EXCELM');



//Examen 
Route::get('consultaexamen','WorldController@consultaexamen')->name('consultaexamen');
Route::get('pdfexamen','WorldController@pdfexamen')->name('pdfexamen');
Route::get('excelexamen','WorldController@excelexamen')->name('excelexamen');
<?php

use Illuminate\Support\Facades\Route;
//Agregamos los controladores esta en la ruta App\Http\Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UsuariotituladoController;
use App\Http\Controllers\tituloController;
use App\Http\Controllers\NombreinstitucionController;
use App\Http\Controllers\NivelformacionController;
use App\Http\Controllers\UsuarioadministrativoController;
use App\Http\Controllers\CargoController;

use App\Http\Controllers\SearchController;

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

Route::post('myurl',[SearchController::class, 'show']);

// Route::get('/','App\Http\Controllers\WelcomeController@index');

// Route::get('/search','usuariotitulados@search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Agregamos
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('usuariotitulados', UsuariotituladoController::class);
    Route::resource('titulos', tituloController::class);
    Route::resource('nombreinstitucions', NombreinstitucionController::class);
    Route::resource('nivelformacions', NivelformacionController::class);
    Route::resource('usuarioadministrativos', UsuarioadministrativoController::class);
    Route::resource('cargos', CargoController::class);
});     
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImpController;
use App\Http\Controllers\MenuController;
use Illuminate\Routing\RouteGroup;

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
    return view('auth.login');
});  

/*Route::get('/libro', function () {
    return view('libro.index');
}); 

Route::get('/libro/create',[MenuController::class,'create']); */



Route::resource('libro',MenuController::class)->middleware('auth');
Auth::routes(['reset'=>false]);

Route::get('/', [MenuController::class, 'show'])->name('home');

Route::middleware(['middleware' => 'auth'],function () {
    Route::get('/', [MenuController::class, 'index'])->name('libro.index');
    
}); 

Route::get('vista/{pasar}', [MenuController::class, 'vista'])->name('vista');

Route::get('/get-all-imprimir', [ImpController::class, 'impresion']);
Route::get('/dowload-pdf',[ImpController::class,'dowloadPDF'])->name('impresion');
    
<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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
Route::prefix('site')->group(function(){ //it will have how first parameter this prefix.
    Route::get('/',[PrincipalController::class, 'principal'])->name('rotaIndex'); //named to use with route('nome');
    Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('rotaNome');
    Route::get('/contato', [ContatoController::class, 'contato'])->name('rotaContato');
    Route::get('/contato/{metodo}', [ContatoController::class, 'metodoContato'])->where('metodo', 'email|telefone');
});


//We can redirect with 2 ways.

//Route::redirect('origin', 'to');

//in callback function, we can use: return redirect()->route('routeName');
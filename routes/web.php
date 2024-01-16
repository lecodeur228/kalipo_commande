<?php

use App\Http\Controllers\CommandeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[CommandeController::class, 'index'])->name("commandepage");
Route::post('/',[CommandeController::class, 'make_commande'])->name("docommandepage");
Route::get('/admin/commande',[CommandeController::class, 'command_index'])->name("listecommade");
Route::put('/admin/update-command/{id}', [CommandeController::class, 'valide_commande'])->name('validecommande');

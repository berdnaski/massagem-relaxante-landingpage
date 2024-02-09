<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\RecrutamentoController;

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

Route::redirect('/', '/agendamento');

Route::get('/agendamento', [AgendamentoController::class, 'index'])->name('agendamento.index');
Route::get('/recrutamento', [RecrutamentoController::class, 'index'])->name('recrutamento.index');

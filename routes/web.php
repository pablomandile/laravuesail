<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/inicio', 'welcome')->name('inicio');

Route::view('/about', 'landing/about')->name('about');

// Primer Crud de Notas
Route::get('/notes', [ NoteController::class, 'index' ])->name('notes.index');
Route::get('/notes/create', [ NoteController::class, 'create' ])->name('notes.create');
Route::post('/notes/store', [ NoteController::class, 'store'])->name('notes.store');
Route::get('/notes/edit/{note}', [ NoteController::class, 'edit' ])->name('notes.edit');
Route::put('/notes/update/{note}', [ NoteController::class, 'update' ])->name('notes.update');
Route::get('/notes/show/{note}', [ NoteController::class, 'show' ])->name('notes.show');
Route::delete('/notes/destroy/{note}', [ NoteController::class, 'destroy' ])->name('notes.destroy');

// Segundo Crud de notas usando resource
Route::resource('/tickets', PostController::class);

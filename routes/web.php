<?php


use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/create', [NoteController::class, 'create'])->name('notes.create');

Route::post('/create/note', [NoteController::class, 'store'])->name('notes.publish');

Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');

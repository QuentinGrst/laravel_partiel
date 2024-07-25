<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index'])->name('books.index'); // Lister tous les livres
Route::get('/books/create', [BookController::class, 'create'])->name('books.create'); // Afficher le formulaire pour ajouter un nouveau livre
Route::post('/books', [BookController::class, 'store'])->name('books.store'); // Sauvegarder un nouveau livre
Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit'); // Afficher le formulaire pour modifier un livre existant
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update'); // Mettre à jour les informations d'un livre
Route::patch('/books/{id}', [BookController::class, 'update'])->name('books.update'); // Mettre à jour les informations d'un livre
Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy'); // Supprimer un livre

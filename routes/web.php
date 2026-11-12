<?php

use App\Livewire\Categoria\CategoriaEdit;
use App\Livewire\Categoria\CategoriaIndex;
use App\Livewire\CategoriaCreate;
use Illuminate\Support\Facades\Route;


Route::get('/categoriaCreate', CategoriaCreate::class)->name('categoria.create');
Route::get('/categoriaIndex', CategoriaIndex::class)->name('categoria.index');
Route::get('/categoriaEdit/{id}', CategoriaEdit::class)->name('categoria.edit');
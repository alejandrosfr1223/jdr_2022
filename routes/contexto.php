<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('contexto.contexto');
})->name("home");
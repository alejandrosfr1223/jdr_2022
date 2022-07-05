<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('agenealogico.agenealogico');
})->name("home");
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('investigation.investigation');
})->name("home");

Route::get('gen_unit', function () {
    return view('investigation.gen_unit');
})->name("gen_unit");

Route::get('hist_unit', function () {
    return view('investigation.hist_unit');
})->name("hist_unit");

Route::get('jurid_unit', function () {
    return view('investigation.jurid_unit');
})->name("jurid_unit");
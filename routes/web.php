<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello-package', function () {

    return view('hello-package::welcome');
});
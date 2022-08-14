<?php
use Illuminate\Support\Facades\Route;

Route::name('login.')->prefix('login')->middleware('guest')->group(function () {

});

Route::name('logout.')->prefix('logout')->middleware('auth')->group(function () {

});

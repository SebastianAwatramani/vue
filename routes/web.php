<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('vue.welcome');
});

Route::get('/attributeAndClassBinding', function() {
    return view('vue.attributeBinding');
});

Route::get('/computedProperties', function() {
    return view('vue.computedProperties');
});

Route::get('/components1', function() {
    return view('vue.components1');
});


<?php

use Mpociot\ApiDoc\ApiDoc;

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

ApiDoc::routes();

Route::get('/', function() {
    return view('apidoc.index');
});

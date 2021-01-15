<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
//

//Route::get('/', function (Request $request) {
//    dd($request->all());
//    return Inertia::render('Welcome');
//});

Route::middleware('auth')->get('/', function (Request $request) {
    return Inertia::render('Welcome');
});

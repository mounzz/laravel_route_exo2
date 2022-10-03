<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/about', function () {
    $fruit = "mango";
    return view('pages.about', compact('fruit'));
});

Route::get('/contact', function () {
    $nom = "mdr";
    $prenom = "lol";
    $numTel = "numéro";
    return view('pages.contact', compact('nom', 'prenom', 'numTel'));
});

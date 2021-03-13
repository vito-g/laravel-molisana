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

//In alternativa ma valida solo per la GET (non anche per la POST):
// Route:: view('/', 'welcome');

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/product', function () {
    return view('product');
});

// Route::get('/layout', function () {
//     return view('layout.layout');
// });
//
// Route::get('/layout', function () {
//     return view('layout.section-page');
// });

//Per inviare l'array di parametri ['name' =>'Taylor'] procedo come di seguito e per stampare name in layout utilizzo la sintasi {{name}}
Route::get('/layout', function () {
    return view('layout.section-page', ['name' => 'Taylor']);
});

//Facciamo un esempio con la pagina product:
Route::get('/product/{id}', function ($id) {
    return view('product', ['idProduct' => $id]);
});

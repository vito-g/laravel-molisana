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

//Se decommentata viene cmq invalidata perchè sovrascritta dall'altra get alla homepage più in basso di questa. L'ultima istruzione a cascata vince.
// Route::get('/homepage', function () {
//     return view('homepage');
// });


Route::get('/product/{id}', function ($id) {
    return view('components.product-content', ['idProduct' => $id]);
});

Route::get('/homepage', function () {
    return view('components.homepage-content');
});

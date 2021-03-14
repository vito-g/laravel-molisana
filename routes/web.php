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

//Route per Homepage di prova
// Route::get('/homepage-prova', function () {
//     return view('homepage-di-prova');
// });

// -----------------------------------------------------------
//Anche non mettendo a commento le istruzioni che seguono, queste verrebbero invalidate perchè cmq sovrascritte da quelle più in basso

//Con $data disponibile in homepage-content.php:

// Route::get('/homepage', function () {
//     return view('components.homepage-content');
// });



//Con $data disponibile in product-content.php:

// Route::get('/product/{id}', function ($id) {
//   $data = config('pasta-data');
//   return view('components.product-content', ['idProduct' => $id, 'data' => $data]);
// });
// -----------------------------------------------------------

//(*)Prendendo $data direttamenta da pasta-data.php del folder 'config' e inviandolo come parametro al template homepage-content.blade.php in cui diventerà una variabile:

Route::get('/homepage', function () {
    // dump('ciao');
    $data = config('pasta-data');//pasta-data è il nome del file che vado a richiamare dal folder 'config
    // dump($data);
    return view('components.homepage-content', ['data' => $data]);
});



//(**)Prendendo $data direttamenta da pasta-data.php del folder 'config' e inviandolo, assieme all'id, come parametro al template product-content.blade.php in cui diventerà una variabile:

Route::get('/product/{id}', function ($id) {
    $data = config('pasta-data');//pasta-data è il nome del file che vado a richiamare dal folder 'config
    return view('components.product-content', ['idProduct' => $id, 'data' => $data]);
});

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

//Prendo $data direttamenta da pasta-data.php del folder 'config' riscrivo le istruzioni qui di seguito come più sotto(**)
// Route::get('/product/{id}', function ($id) {
//     $data = config('pasta-data');
//     return view('components.product-content', ['idProduct' => $id, 'data' => $data]);
// });

Route::get('/homepage', function () {
    return view('components.homepage-content');
});

//Prendo $data direttamenta da pasta-data.php del folder 'config' e lo invio come parametro al template homepage-content.blade.php in cui diventerà una variabile
Route::get('/homepage', function () {
    // dump('ciao');
    $data = config('pasta-data');
    // dump($data);
    return view('components.homepage-content', ['data' => $data]);
});
//(**)Prendo $data direttamenta da pasta-data.php del folder 'config' e lo invio come parametro al template product-content.blade.php in cui diventerà una variabile
Route::get('/product/{id}', function ($id) {
    $data = config('pasta-data');
    return view('components.product-content', ['idProduct' => $id, 'data' => $data]);
});

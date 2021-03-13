<!-- Miei Commenti_1:
'index.php' del folder 'public 'è il P.TO di INGRESSO di ogni PROGETTO LARAVEL. N:B: public/index.php NON VA MAI TOCCATA -->
<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true)); //Miei Commenti_2: FX PHP che DEFINISCE delle COST. Il PRIMO ARG è il NOME COST, il SECONDO è il VALORE; 'microtime' è tempo in microsec usato, per es, per individuare il tempo necessario per fare una chiamata

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
| TRADUZIONE: Composer fornisce un pratico programma di caricamento classi generato automaticamente per
la nostra applicazione. Dobbiamo solo utilizzarlo! Lo richiederemo semplicemente
nello script qui, in modo che non dobbiamo preoccuparci, in seguito, del caricamento manuale
di una qualsivoglia nostra classa. È bello rilassarsi. (Aggiunto da me: In altri termini, LARAVEL con ciò ci EVITERA' il REQUIRE ONCE)
|
*/

require __DIR__.'/../vendor/autoload.php';//Miei Commenti_3: Scende di un livello, (esce da 'public') entra dentro 'vendor' e carica 'autoload'

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.

//Miei Commenti_8:
TRADUZIONE: Dobbiamo illuminare lo sviluppo di PHP, quindi accendiamo le luci.
Questo avvia (to bootstrap: acricare automaticamente in memoria; to boot strap: avviare la cinghia) il framework e lo prepara per l'uso, quindi
caricherà questa applicazione in modo da poterla eseguire e tornare
le risposte al browser, deliziando i nostri utenti. (Vedi ora app.php dentro il folder 'bootstrap')
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

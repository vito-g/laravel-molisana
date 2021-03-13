<!-- N:B: bootsrap/app.php NON VA MAI TOCCATA -->
<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/
////Miei Commenti_9: CREA una NUOVA APPLICAZIONE LARAVEL
$app = new Illuminate\Foundation\Application(
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__) //DEFinisce il PATH ATTUALE
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

$app->singleton(
    Illuminate\Contracts\Http\Kernel::class, //Attiva i SUPER POTERI dell'HTTP
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.

TRADUZIONE: Questo script restituisce l'istanza dell'applicazione. L'istanza viene assegnata allo script chiamante in modo da poter separare la costruzione delle istanze
dall'effettiva esecuzione dell'applicazione e dall'invio delle risposte.
|
*/

return $app; //Ritorna all'applicazione

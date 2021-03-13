<?php

namespace App\Http\Controllers; //Miei Commenti:7: DEFINISCE il NOSTRO SPAZIO: DOVE CI TROVIAMO: Coincide, evidentemente, con la nomenclatura delle cartelle. Mi dice dove si trova 'controller.php'
//Miei Commenti_8: Gli 'use', qui sotto sono 'REQUIRE ONCE' dinamici. Tutto ciò che è stato caricato in 'vendor' attraverso il 'composer' adesso è disponibile attraverso gli 'use'. Quando si fa un reload della Home di LARAVEL (una nuova richiesta), in quel momento vengono caricati tutti i pacchetti presenti nel 'vendor'. Vedi ora commenti in index.php
use Illuminate\Foundation\Auth\Access\AuthorizesRequests; //Miei Commenti_10: va a prendere quella libreria (l'oggetto, la classe AuthorizesRequests) a seconda del 'namespace' che lo precede: vendor/laravel/framework/src/ILLUMINATE/FOUNDATION/AUTH/ACCESS. TUtti i pacchetti vengono caricati ma utilizza solo la classe richiamata con lo 'use'. Cioè, legge tutti i file ma non impiega la memoria per quelli che non sta sfruttando.
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}

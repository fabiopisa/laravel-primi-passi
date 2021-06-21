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
    $data = [
        'name'=> 'Sigourney',
        'lastname' => 'Weaver',
        'films'=>[
            'Alien',
            'Aliens',
            'Alien-3',
            'Alien-la-clonazione',
            'Avatar'
        ]
    ];
    return view('homepage', $data);
});
Route::get('/Alien', function () {
    $data=[ 
        'name'=> 'Alien',
        'vote'=> 8.5,
        'description' =>"Anno 2122. La gigantesca astronave da trasporto Nostromo è in viaggio di ritorno verso la Terra dal pianeta Thedus con un carico di minerali. L'equipaggio, in stato di ipersonno, è formato da cinque uomini e due donne, ossia il capitano Dallas, il vice Kane, l'ufficiale scientifico Ash, il capo-tecnico Parker, il suo collega Brett, più il tenente Ellen Ripley, la navigatrice Lambert e la loro mascotte Jones, un gatto rosso. MOTHER, il computer di bordo, riceve improvvisamente un misterioso segnale di soccorso proveniente da un satellite di un pianeta sconosciuto e risveglia gli occupanti. L'equipaggio, alquanto riluttante, è obbligato ad adempiere alla procedura di indagine, pena la perdita dei dividendi"
    ];
    
    return view('Alien',$data);
});
Route::get('/Aliens', function () {
    $data= [ 
        'name'=> 'Aliens',
        'vote'=> 8,
        'description' =>"Anno 2179. Dopo 57 anni di ipersonno nella navetta di salvataggio Ellen Ripley viene soccorsa dalla squadra di recupero della stazione spaziale di Gateway. Il ritorno sulla Terra di Ripley si rivela tutt'altro che eroico: i membri della compagnia Weyland-Yutani la ritengono responsabile per la distruzione della loro astronave Nostromo e sono scettici sull'esistenza del mostro alieno che avrebbe sterminato l'equipaggio, quindi le sospendono la licenza di sottoufficiale di volo. Ripley viene anche a sapere che durante la sua assenza il planetoide sul quale erano atterrati (ora LV-426) è stato terraformato e colonizzato dalla Compagnia."
    ];
    return view('Aliens',$data);
});
Route::get('/Alien-3', function () {
    $data= [ 
        'name'=> 'Alien 3',
        'vote'=> 9,
        'description' =>"Anno 2179. Sulla USS Sulaco, la nave con la quale il tenente Ellen Ripley, il caporale Hicks, la piccola Newt e l'ormai disattivato androide Bishop stanno tornando sulla Terra, avviene un cortocircuito che provoca un incendio e costringe la nave ad espellere un modulo di salvataggio dove sono contenute le capsule criogeniche per tentare un atterraggio di fortuna su un pianeta, Fiorina 'Fury' 161, una colonia penale abitata solo da 25 detenuti con la sindrome 47,XYY, o Sindrome di Jacobs."
    ];
    return view('Alien-3',$data);
});
Route::get('/Alien-la-clonazione', function () {
    $data= [ 
        'name'=> 'Alien la clonazione',
        'vote'=> 7.5,
        'description' =>"Anno 2379. Sono passati 200 anni dai fatti del pianeta Fiorina 161 ed Ellen Ripley viene clonata nel corso di un esperimento condotto sulla nave militare dei Sistemi Uniti 'Auriga'. Lo scopo è quello di recuperare l'embrione di Xenomorfo dal suo torace per ottenere una regina che produca degli Alien in larga scala a scopo bellico. L'esperimento riesce all'ottavo tentativo; la nuova Ripley, a causa dei processi subiti, non è però un semplice essere umano: ha una sorta di legame empatico con gli Xenomorfi, possiede alcune loro caratteristiche, come una forza sovrumana e il sangue corrosivo. Inoltre, ha ereditato molti ricordi della sua vita precedente."
    ];
    return view('Alien-la-clonazione', $data);
});
Route::get('/Avatar', function () {
    $data= [ 
        'name'=> 'Avatar',
        'vote'=> 9.8,
        'description' =>"Nel 2154 una compagnia interplanetaria terrestre, la RDA, è da alcuni anni all'opera su Pandora, luna del gigante gassoso Polifemo, appartenente al sistema stellare Alfa Centauri. Pandora è un mondo primordiale ricoperto da foreste pluviali, le cui flora e fauna sono di dimensioni decisamente superiori rispetto a quelle terrestri. Tra le specie del pianeta ve n'è una di umanoidi chiamati Na'vi, alti mediamente anche più di 3 metri e con pelle blu striata. L'atmosfera del satellite è tossica per gli umani che devono indossare apposite maschere filtranti; inoltre sono stati sviluppati gli avatar, cioè ibridi creati in laboratorio con geni umani e geni Na'vi, ma privi di coscienza propria: infatti ciascun avatar può essere utilizzato e controllato solo dall'essere umano il cui DNA è stato impiegato per comporlo."
    ];
    return view('Avatar',$data);
});

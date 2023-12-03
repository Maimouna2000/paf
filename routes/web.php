<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;




Route::get('/', [PagesController::class, 'inscription']) ;
Route::view('/inscription','inscription');
Route::view('/affichage','affichage');
/*Route::view('/suppression','suppression');
Route::view('/connexion','connexion');
Route::view('/mise_a_jour','mise_a_jour');*/

Route::post('/inscription/traitement', [PagesController::class,'inscription_fournisseur_traitement']);
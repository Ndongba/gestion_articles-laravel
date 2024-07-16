<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('ajouter',[ArticleController::class,'ajouter_article']);
Route::post('traitement_article',[ArticleController::class,'traitement_artile']);
Route::get('afficher',[ArticleController::class,'afficher_article']);
<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Articles

Route::get('ajouter',[ArticleController::class,'ajouter_article']);
Route::post('traitement_article',[ArticleController::class,'traitement_article']);
Route::get('afficher',[ArticleController::class,'afficher_article']);
Route::get('detail/{id}',[ArticleController::class,'detail_article']);
Route::get('supprimer/{id}',[ArticleController::class, 'supprimer_article']);
Route::get('modifier/{id}',[ArticleController::class,'modifier_article']);
Route::post('/sauvegarde/{id}',[ArticleController::class,'sauvegarde_article']);


//Commentaires

Route::post('/commentaires/sauvegarder',[CommentaireController::class, 'sauvegarde_commentaire']);
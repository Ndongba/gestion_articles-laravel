<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouter_article() {
        return view('articles.ajouter');
    }

    public function traitement_artile(Request $request) {

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'date_de_creation' => 'required',
            'a_la_une' => 'required',
            'url_image' => 'required',
        ]);

        Article::create($request->all());
        
        return redirect();
    }

    public function afficher_article() {
        $articles = Article::all(); 
        return view('articles.afficher', compact('articles'));
    }

    public function detail_article($id) {
        $article = Article ::find($id);

        return view('articles.detail', compact('article'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ajouter_article() {
        return view('articles.ajouter');
    }

    public function traitement_article(Request $request) {

         $request->validate([
             'nom' => 'required',
             'description' => 'required',
             'date_de_creation' => 'required',
             'a_la_une' => 'required',
             'url_image' => 'required',
         ]);

        Article::create($request->all());
        return redirect()->back();
    }

    public function afficher_article() {
        $articles = Article::all(); 
        return view('articles.afficher', compact('articles'));
    }

    public function detail_article($id) {
        $article = Article::find($id);
        $commentaires = $article->commentaires;

        return view('articles.detail', compact('article','commentaires'));
    }


    public function supprimer_article($id) {
        $article= Article::find($id);
        $article->delete();
        
        return redirect()->back();
    }

    public function modifier_article($id) {
        $article=Article::find($id);
        return view('articles.modifier',compact('article'));
    }

    public function sauvegarde_article(Request $request,$id) {
          

         $article=Article::find($id);
         $article->update($request->all());
         return redirect('afficher');

        



    }
}



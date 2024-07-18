<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    public function sauvegarde_commentaire(Request $request) {

        $request->validate ([
            'contenu' => 'required',
            'nom_complet_auteur' => 'required',
            'article_id' => 'required',
        ]);

        Commentaire::create($request->all());
        return redirect()->back();
    }

    public function delete_commentaire($id) {

       $commentaire=Commentaire::find($id);
       $commentaire->delete();

       return redirect()->back();

    }

    public function modifier_commentaire($id)
    {
        $commentaire = Commentaire::findOrFail($id);

         // Si vous avez besoin de l'article, récupérez-le via l'association
        $article = $commentaire->article;

        return view('commentaires.modifier_commentaire', compact('commentaire', 'article'));
    }

    public function sauvegarde_modification(Request $request)
    {
    $commentaire = Commentaire::findorfail($request->id);
    $commentaire->contenu = $request->contenu;
    $commentaire->nom_complet_auteur = $request->nom_complet_auteur;
    $commentaire->article_id = $request->article_id;
    
    

    $commentaire->update();
    return redirect('afficher');
    
 }

   
}

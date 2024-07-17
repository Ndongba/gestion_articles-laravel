<?php

namespace App\Http\Controllers;

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
}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Detail Article</title>
</head>
<body>
<div class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
                <h1 class="display-4 font-italic">{{ $article->nom }}</h1>
            </div>
        </div>
    </div>
    <br><br>
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    {{ $article->nom }}
                </h3>

                <div class="blog-post">
                    

                    <p> {{ $article->description }} </p>

                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->

           
    <!---------------------------Commentaires---------------->
                
    
        <section class="liste-commentaires">
            <div class="row">
                <div class="col">
                    <h3> <i class="fa-solid fa-comments"></i> Vos commentaires </h3>
                </div>
            </div>
            <div class="row" >
                <div class="col-7">
                    <ol class="list-group list-group-numbered">
                        @foreach ( $commentaires as $commentaire )
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $commentaire->nom_complet_auteur}}</div>
                                {{ $commentaire->contenu}}
                                <div class="bouton">
                                    <div>
                                        <a href="/commentaires/modifier_commentaire/{{ $commentaire->id}}" class="btn btn-primary" id="modifier">Modifier</a>
                                    </div>
                                    <div>
                                        <a href="/commentaires/delete/{{ $commentaire->id }}" class="btn btn-danger" id="supprimer">Supprimer</a>
                                    </div>
                                </div>
                            </div>
                            
                        </li>
                        @endforeach
                    </ol>
                </div>
                <div class="col-5">
                    <form action="/commentaires/sauvegarder" method="POST">
                        @csrf
                        <input type="hidden" name="article_id" value="{{ $article->id }}">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Présentez vous ! </label>
                            <input type="text" class="form-control @error('nom_complet_auteur') is-invalid @enderror" id="nom" name="nom_complet_auteur" value="{{ old('nom_complet_auteur') }}">
                           
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="form-label">Laissez nous un mot ! </label>
                            <textarea class="form-control  @error('contenu') is-invalid @enderror" id="contenu" name="contenu">{{ old('contenu') }}</textarea>
                            @error('contenu')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                    </form>
                </div> 
            </div> 
            
            </div>
        </section>
</body>
</html>
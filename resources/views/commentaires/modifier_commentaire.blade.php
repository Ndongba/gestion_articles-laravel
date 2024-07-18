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


            
                            <!---------------------------Commentaires------------------->
                
    
        <h2 id="h2">Modifier votre commentaire</h2>
                <div class="container">
                    <form action="{{ url('sauvegarde_modification/'.$commentaire->id) }}" method="POST">
                        @csrf
                       
                        <input type="hidden" name="article_id" value="{{ $commentaire->article_id }}">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Présentez vous ! </label>
                            <input type="text" class="form-control @error('nom_complet_auteur') is-invalid @enderror" id="nom" name="nom_complet_auteur" value="{{ $commentaire->nom_complet_auteur }}">
                           
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="form-label">Laissez nous un mot ! </label>
                            <textarea class="form-control  @error('contenu') is-invalid @enderror" id="contenu" name="contenu">{{ $commentaire->contenu }}</textarea>
                            @error('contenu')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <a href="">
                            <button type="submit" class="btn btn-outline-secondary">Envoyer</button>
                        </a>
                    </form>
                </div> 
            </div> 
            
            </div>
        </section>
</body>
</html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ajout Articles</title>
</head>
<body>
@if(session('status'))
  <div class="alert alert-sucess">
    {{session('status')}}
  </div>
  @endif
  <form class="container" action="{{ url('sauvegarde/'.$article->id) }}" method="post">
    @csrf
    <h1>Ajouter un article</h1>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom</label>
  <input type="text" class="form-control" id="nom" name="nom" value="{{ $article->nom }}" required>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Description</label>
  <textarea class="form-control" id="description" name="description" rows="8">{{ $article->description }}</textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Date de création</label>
  <input type="date" name="date_de_creation" value="{{ $article->date_de_creation }}" required>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="a_la_une" id="Radio" value="{{ $article->a_la_une }}">
  <label class="form-check-label" for="flexRadioDefault1">
    A la Une
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="pas_a_la_une" id="Radio" value="{{ $article->pas_a_la_une }}" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Pas A la Une
  </label>
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Url_Image</label>
  <input type="text" class="form-control" id="url_image" name="url_image" value="{{ $article->url_image }}" required>
</div>

 
 
 
 <button type="submit" class="btn btn-primary">Enregistrer</button>

</body>
</html>
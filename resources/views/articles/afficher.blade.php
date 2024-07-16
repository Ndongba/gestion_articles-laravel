<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Liste Articles</title>
</head>
<body>
<div class="album py-5 bg-light">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($articles as $article)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="25%" height="225" src="{{ $article->url_image }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $article->nom }}
                                   
                                </h5>
                                <p class="card-text"> {{ Str::limit($article->description , 100);}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="detail/{{ $article->id }}">
                                            <button type="button" class="btn btn-sm btn-success">
                                                Détail
                                            </button>
                                        </a>

                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</body>
</html>
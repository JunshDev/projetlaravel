<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD IN LARAVEL 10 </title>
  </head>
  <body>


    <div class="container">
  <div class="row">
    <div class="col s12">
    <h1>MODIFIER UN ETUDIANT - LARAVEL 10</h1>
    <hr>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <ul>
        @foreach($errors->all() as $error)
        <li class="alert alert-danger"> {{$error}} </li>
        @endforeach
    </ul>


    <form action="/update/traitement" method="POST" class="form-group">
            @csrf

            <input type="text" name="id" style="display: none;" value="{{ $etudiants->id }}">

  <div class="form-group">
    <label for="Nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="Nom" name="nom" value="{{ $etudiants->nom }}">
  </div>

  <div class="form-group">
    <label for="Prenom" class="form-label">Prenom</label>
    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $etudiants->prenom }}">
  </div>

  <div class="form-group">
    <label for="Classe" class="form-label">Classe</label>
    <input type="text" class="form-control" id="Classe" name="classe" value="{{ $etudiants->classe }}">
  </div>
    <br>
  <button type="submit" class="btn btn-primary">Modifier UN ETUDIANT</button>

  <br> <br>

    <a href="/etudiant" class="btn btn-danger">Revenir à la liste des étudiants</a>

</form>

    </div>

  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     </body>
</html>

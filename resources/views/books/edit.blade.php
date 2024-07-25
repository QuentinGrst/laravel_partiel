<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un livre</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="my-4">Modifier un livre</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titre:</label>
                <input type="text" name="title" id="title" class="form-control"
                    value="{{ old('title', $book->title) }}">
            </div>
            <div class="form-group">
                <label for="author">Auteur:</label>
                <input type="text" name="author" id="author" class="form-control"
                    value="{{ old('author', $book->author) }}">
            </div>
            <div class="form-group">
                <label for="year">Année:</label>
                <input type="number" name="year" id="year" class="form-control" value="{{ old('year', $book->year) }}">
            </div>
            <div class="form-group">
                <label for="genre">Genre:</label>
                <input type="text" name="genre" id="genre" class="form-control"
                    value="{{ old('genre', $book->genre) }}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Mettre à jour</button>
                <a href="{{ route('books.index') }}" class="btn btn-secondary">Retour</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
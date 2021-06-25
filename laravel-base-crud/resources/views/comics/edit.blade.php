<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="post">
    @csrf
    @method('PUT')

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title" value="{{ $comic->title }}"><br>

    <label for="series">Serie</label>
    <input type="text" name="series" id="series" value="{{ $comic->series }}"><br>

    <label for="poster">Poster</label>
    <input type="text" name="poster" id="poster" value="{{ $comic->poster }}"><br>

    <label for="price">Prezzo</label>
    <input type="number" name="price" id="price" value="{{ $comic->price }}"><br>

    <label for="type">Categoria</label>
    <input type="text" name="type" id="type" value="{{ $comic->type }}"><br>

    <label for="sale_date">Data</label>
    <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"><br>

    <label for="description">description</label>
    <input type="text" name="description" id="description" value="{{ $comic->description }}"><br>
    
    <input type="submit" value="Modifica">
    
    
    </form>
</body>
</html>
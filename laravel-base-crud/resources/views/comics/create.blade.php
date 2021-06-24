<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Comic</title>
</head>
<body>
    <form action="comics.store" method="post">
    @csrf

    <label for="title">Titolo</label>
    <input type="text" name="title" id="title"><br>

    <label for="series">Serie</label>
    <input type="text" name="series" id="series"><br>

    <label for="poster">Poster</label>
    <input type="text" name="poster" id="poster"><br>

    <label for="price">Prezzo</label>
    <input type="number" name="price" id="price"><br>

    <label for="type">Categoria</label>
    <input type="text" name="type" id="type"><br>

    <label for="sale_date">Data</label>
    <input type="date" name="sale_date" id="sale_date"><br>

    <label for="description">Titolo</label>
    <input type="text" name="description" id="description">
    
    
    
    </form>
</body>
</html>
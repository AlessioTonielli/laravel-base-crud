<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic</title>
</head>
<body>
    <header>
        <nav>
            <ul>

                <li><a href="{{ route('home') }}">Torna alla home</a></li>
                <li><a href="{{ route('comics.index') }}">Tutti i fumetti</a></li>
                <li><a href="{{ route('comics.create') }}">Aggiungi fumetto</a></li>
            
            </ul>
        </nav>
    </header>
    <main>
    <ul>
    <h1>{{ $comic->title }}</h1>
    <ul>
    <li>Serie: {{ $comic->series }}</li>
    <li>Prezzo: {{ $comic->price }} €</li>
    <li>Categoria: {{ $comic->type }}</li>
    <li>Poster: {{ $comic->poster }}</li>
    <li>descrizione: {{ $comic->description }}</li>
    </ul>
    
    
    
    </main>
</body>
</html>
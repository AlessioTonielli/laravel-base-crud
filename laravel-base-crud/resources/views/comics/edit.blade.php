
@extends('comics.layout.default')

@section('title', 'Edit Comics')

@section('hero')
@include('comics.partials.hero')
@endsection

@section('content')
@include('comics.components.errors')
<section class="form">



    <div class="container">

        <form action="{{ route('comics.update', ['id' => $comic->id]) }}" method="post">
            @csrf
            @method('PUT')


            <h3>Titolo</h3>
            <input type="text" name="title" id="title" value="{{ $comic->title }}"><br>

            <h3>Serie</h3>
            <input type="text" name="series" id="series" value="{{ $comic->series }}"><br>

            <h3>Poster</h3>
            <input type="text" name="poster" id="poster" value="{{ $comic->poster }}"><br>

            <h3>Prezzo</h3>
            <input type="text" name="price" id="price" value="{{ $comic->price }}"><br>

            <h3>Categoria</h3>
            <input type="text" name="type" id="type" value="{{ $comic->type }}"><br>

            <h3>Data</h3>
            <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}"><br>

            <h3>Descrizione</h3>
            <textarea name="description" id="description" cols="30" rows="10">{{ $comic->description }}</textarea><br>

            <input type="submit" value="Modifica" class="btn">


        </form>
            <button class="btn">
                <a href="{{ route('comics.index') }}">Torna Indietro</a>
            </button>

    </div>
</section>
@endsection

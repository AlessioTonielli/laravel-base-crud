
@extends('comics.layout.default')

@section('title', 'Add Comics')

@section('hero')
@include('comics.partials.hero')
@endsection

@section('content')
@include('comics.components.errors')
<section class="form">



        <div class="container">
        
            <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <h3>Titolo</h3>
            <input type="text" name="title" id="title"><br>

            <h3>Serie</h3>
            <input type="text" name="series" id="series"><br>

            <h3>Poster</h3>
            <input type="text" name="poster" id="poster"><br>

            <h3>Prezzo</h3>
            <input type="text" name="price" id="price"><br>

            <h3>Categoria</h3>
            <input type="text" name="type" id="type"><br>

            <h3>Data</h3>
            <input type="date" name="sale_date" id="sale_date"><br>

            <h3>Descrizione</h3>
            <textarea name="description" id="description" cols="30" rows="10">Descrizione: </textarea><br>
            
            <input type="submit" value="Aggiungi" class="btn">
            
            
            </form>
            @include('comics.components.buttonBack')
        </div>
</section>
@endsection
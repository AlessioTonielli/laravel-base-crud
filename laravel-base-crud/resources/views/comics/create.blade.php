
@extends('comics.layout.default')

@section('title', 'Add Comics')

@section('hero')
@include('comics.partials.hero')
@endsection

@section('content')
<section class="form">



        <div class="container">
            @include('comics.components.errors')   
        
            <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <h3>Titolo</h3>
            <input type="text" name="title" id="title"><br>

            <h3>Serie</h3>
            <input type="text" name="series" id="series"><br>

            <h3>Poster</h3>
            <input type="url" name="poster" id="poster"><br>

            <h3>Prezzo</h3>
            <input type="number" name="price" id="price" step="0.01" min="0.01"><br>

            <h3>Categoria</h3>
            <input type="text" name="type" id="type"><br>

            <h3>Data</h3>
            <input type="date" name="sale_date" id="sale_date"><br>

            <h3>Descrizione</h3>
            <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
            
            <input type="submit" value="Aggiungi" class="btn_secondary">
            
            
            </form>
            <a href="{{ url()->previous() }}" class="btn_secondary">Torna Indietro</a>

        </div>
</section>
@endsection
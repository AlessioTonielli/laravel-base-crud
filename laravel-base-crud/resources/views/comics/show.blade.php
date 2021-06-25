
@extends('comics.layout.default')

@section('title-home', 'Comic')

@section('hero')
@include('comics.partials.hero')
@endsection

@section('content')
<div class="banner">
    <div class="container">
        <div class="box-img">
            <img src="{{ $comic['poster'] }}" alt="">
            <h5 class="top-banner">comic book</h5>
            <h5 class="bot-banner">view gallery</h5>
        </div>
    </div>
</div>

<section class="description">
    <div class="container">
        <div class="content">
            <h2>{{ $comic['title'] }}</h2>
            <div class="shop">
                <div class="left">
                    <p>U.S. Price: <span> {{ $comic['price'] }}</span></p>
                    <p>AVAILABLE</p>
                </div>
                <div class="rigth">
                    <p>check availability</p>
                </div>
            </div>
            <p class="description">{{ $comic['description'] }}</p>
            <a href="{{ route('comics.edit', ['id' => $comic->id]) }}">Modifica</a>
            <form action="{{ route('comics.destroy', ['id' => $comic->id]) }}" method="post">
                @csrf
                @method('DELETE')

                <input type="submit" value="Cancella" class="delete">

            </form>

        </div>
        <div class="advertisement">
            <H4>ADVERTISEMENT</H4>
            <div class="box-img">
                <img src="{{ asset('images/adv.jpg') }}" alt="">
            </div>
        </div>

    </div>
</section>

@endsection

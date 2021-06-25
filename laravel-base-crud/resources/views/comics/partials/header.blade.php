@php

    function setClassLink($namePage){

        $nameRequestPage = Request::route()->getName();

        $active = '';

        if ($nameRequestPage == $namePage) {
            $active = 'active';
        }

        return $active;
    }
   
@endphp

<header>
    <div class="top-line">
        <div class="container">
            <p>dc power <i class="fa fa-registered" aria-hidden="true"></i></p>
            <p>additional dc sites <i class="fa fa-caret-down" aria-hidden="true"></i></p>
        </div>
    </div>
    <nav>
        <div class="container">
            <div class="box-img">
                <a href="{{ route('comics.index') }}">
                    <img src="{{ asset('/images/dc-logo.png') }}" alt="">
                
                </a>
            </div>
            <ul>
                <li class="{{ setClassLink('characters_page') }}"><a href="#">characters</a></li>
                <li class="{{ setClassLink('comics_page') }}"><a href="{{ route('comics.index') }}">comics</a></li>
                <li class="{{ setClassLink('movies_page') }}"><a href="#">movies</a></li>
                <li class="{{ setClassLink('tv_page') }}"><a href="#">tv</a></li>
                <li class="{{ setClassLink('games_page') }}"><a href="#">games</a></li>
                <li class="{{ setClassLink('collectibles_page') }}"><a href="#">collectibles</a></li>
                <li class="{{ setClassLink('videos_page') }}"><a href="#">videos</a></li>
                <li class="{{ setClassLink('fans_page') }}"><a href="#">fans</a></li>
                <li class="{{ setClassLink('news_page') }}"><a href="#">news</a></li>
                <li class="{{ setClassLink('shop_page') }}"><a href="#">shop <span> <i class="fa fa-caret-down" aria-hidden="true"></i></span></a></li>
            </ul>
            <div class="box-input">
                <input type="text" placeholder="SEARCH">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
    </nav>
</header>
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
                <a href="{{ route('comics.home') }}">
                    <img src="{{ asset('/images/dc-logo.png') }}" alt="">
                
                </a>
            </div>
            <ul>
                <li class="{{ setClassLink('comics.home') }}"><a href="{{ route('comics.home') }}">home</a></li>
                <li class="{{ setClassLink('comics.index') }}"><a href="{{ route('comics.index') }}">comics</a></li>
            </ul>
            <div class="box-input">
                <input type="text" placeholder="SEARCH">
                <i class="fa fa-search" aria-hidden="true"></i>
            </div>
        </div>
    </nav>
</header>
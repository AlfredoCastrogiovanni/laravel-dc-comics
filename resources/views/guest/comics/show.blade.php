@extends('layouts.app')

@section('title', 'DC - Comic')

@section('main-content')
    <section class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron image">
    </section>

    <div class="separator">
        <div class="wrapper">
            <div class="img-box">
                <img src="{{ $comic->thumb }}" alt="">
                <div class="type">{{ $comic->type }}</div>
                <div class="gallery">View Gallery</div>
            </div>
        </div>
    </div>

    <div class="comic-info">
        <div class="wrapper">
            <div class="left-column">
                <h1>{{ $comic->title }}</h1>
                <div class="available-wrapper">
                    <div class="price-wrapper">
                        <span>U.S Price: <span class="price">{{ $comic->price }}</span></span>
                        <span class="available">Available</span>
                    </div>
                    <div class="check-avalable">
                        Check Availability
                        <i class="fa-solid fa-sort-down"></i>
                    </div>
                </div>
                <p>{{ $comic->description }}</p>
            </div>
            <div class="right-column">
                <p>Advertising</p>
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="comic-description">
        <div class="wrapper">
            <div class="specs">
                <h2>Specs</h2>

                <div class="series">
                    <span>Series: </span>
                    <span>{{ $comic->series }}</span>
                </div>
                <div class="price">
                    <span>U.S Price: </span>
                    <span>{{ $comic->price }}</span>
                </div>
                <div class="sale-date">
                    <span>On Sale Date: </span>
                    <span>{{ $comic->sale_date }}</span>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'DC - Comics')

@section('main-content')
    <section class="hero">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbotron image">
    </section>

    <section class="comics">
        <div class="container">
            <span class="title">Current Series</span>
            <div class="wrapper">
                @foreach ($comics as $comic)
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <p>{{ $comic['series'] }}</p>
                </div>
                @endforeach
            </div>
            <div class="button-wrapper">
                <button>Load More</button>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <article>
                <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                <span>Digital Comics</span>
            </article>
            <article>
                <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                <span>Dc Merchandise</span>
            </article>
            <article>
                <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                <span>Subscriptions</span>
            </article>
            <article>
                <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                <span>Comics Shop Locator</span>
            </article>
            <article>
                <img class="visa" src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                <span>DC Power Visa</span>
            </article>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('title', 'Edit Comic')

@section('main-content')
    <section id="edit">
        <form action="{{ route('guest.comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <h1>
                Update comic
            </h1>
            @if ($errors->any())
                <div class="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-control">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="form-control">
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="10">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="form-control">
                <label for="price">Price:</label>
                <input type="text" name="price" id="price" value="{{ old('price', $comic->price) }}">
            </div>
            <div class="form-control">
                <label for="series">Series:</label>
                <input type="text" name="series" id="series" value="{{ old('series', $comic->series) }}">
            </div>
            <div class="form-control">
                <label for="sale_date">Sale Date:</label>
                <input type="datetime" name="sale_date" id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="form-control">
                <label for="type">Type:</label>
                <input type="text" name="type" id="type" value="{{ old('type', $comic->type) }}">
            </div>
            <div class="form-control">
                <label for="thumb">Thumb Url:</label>
                <input type="text" name="thumb" id="thumb" value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <button type="submit">Update</button>
        </form>
    </section>
@endsection
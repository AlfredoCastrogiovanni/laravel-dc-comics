@extends('layouts.app')

@section('title', 'Create Comic')

@section('main-content')
    <section id="create">
        <form action="{{ route('guest.comics.store') }}" method="POST">
            @csrf
            <h1>
                Create new comic
            </h1>
            <div class="form-control">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="form-control">
                <label for="description">Description:</label>
                <textarea name="description" id="description" rows="10"></textarea>
            </div>
            <div class="form-control">
                <label for="price">Price:</label>
                <input type="number" name="price" id="price">
            </div>
            <div class="form-control">
                <label for="series">Series:</label>
                <input type="text" name="series" id="series">
            </div>
            <div class="form-control">
                <label for="sale_date">Sale Date:</label>
                <input type="datetime" name="sale_date" id="sale_date">
            </div>
            <div class="form-control">
                <label for="type">Type:</label>
                <input type="text" name="type" id="type">
            </div>
            <div class="form-control">
                <label for="thumb">Thumb Url:</label>
                <input type="text" name="thumb" id="thumb">
            </div>
            <button type="submit">Create</button>
        </form>
    </section>
@endsection
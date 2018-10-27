@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>This is the item page</h1>
        <hr>
        <p>Titel: {{ $item->title }}</p>
        <br>
        <p>Details: {{ $item->content }}</p>
    </div>

@endsection

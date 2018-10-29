@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>This is the item page</h1>
        <hr>
        <p>Titel: {{ $item->title }}</p><br>

        <p>Details: {{ $item->content }}</p>
        <hr>
        <p><b>{{count($item->likes)}} Likes</b> |
            <a class="btn btn-outline-primary btn-sm"
               href="{{ route('itemlike', ['id' => $item['id']]) }}">Like</a>
        </p>

    </div>

@endsection

@extends('layouts.master')

@section('content')

    <div class="container">
        <h1>This is the item page</h1>
        <hr>
        <p>Titel: {{ $nieuweVariabele['titel'] }}</p>
        <br>
        <p>Staat: {{ $nieuweVariabele['staat'] }}</p>
    </div>

@endsection

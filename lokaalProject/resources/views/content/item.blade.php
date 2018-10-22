@extends('layouts.master')

@section('content')
    <div class="container">
        <H2>Dit is de pagina van mijn item</H2>
        <H4>Dankzij mijn route krijg ik het id:
            <strong>{{$nieuweVariabele}}</strong></H4>
    </div>
@endsection
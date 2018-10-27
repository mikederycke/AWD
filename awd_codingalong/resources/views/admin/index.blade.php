@extends('layouts.admin')

@section('content')
    <div class="container">
        <!--controle op sessie data-->
        @if(session('forminput'))
            <div class="alert alert-success" role="alert">
                Zoekertje aangemaakt met titel: {{ session('forminput') }}
            </div>
        @endif
        <hr>
        <a class="btn btn-primary btn-lg" href="{{route('admin.create')}}" role="button">Create</a>
<hr>
        @foreach($items as $item)
            <div class="row">
                <h2 class="col-8">Title: {{$item->title}}</h2>
                <a class="col-2 btn btn-info btn-xs" href="{{route('admin.edit', ['id' => $item->id])}}" role="button">Edit</a>
                <a class="col-2 btn btn-danger btn-xs" href="{{route('admin.delete', ['id' => $item->id])}}" role="button">Delete</a>
            </div>
        @endforeach
    </div>
@endsection
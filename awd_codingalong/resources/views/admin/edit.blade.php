@extends('layouts.admin')

@section('content')

    <div class="container">
        <form method="post" action="{{route('itemupdate')}}">
            <div class="form-group">
                <label for="title">Titel</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$item->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" class="form-control" id="content" name="content" value="{{$item->content}}">
            </div>
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
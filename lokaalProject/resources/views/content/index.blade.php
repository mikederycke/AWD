@extends('layouts.master')

@section('content')
    {{--{{var_dump($items)}}--}}
    <div class="container">

        @foreach($items as $item)
            <h2>{{$item['title']}}</h2>
            <p>{{$item['content']}}</p>
            <h3><a href="{{ route('item',['id'=> 1]) }}">
                    Details</a>
            </h3>
            <hr>
        @endforeach
    </div>
@endsection


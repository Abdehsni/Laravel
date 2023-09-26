@extends('layout.app')

@section('content_gen')

<div id="destinations">
        <ul class="list-group list-group-flush">
        @foreach($dests as $dest)
        <a href="{{route('Destination',['id'=>$dest->id])}}" class="list-group-item">{{$dest->name}}</a>
        @endforeach
        </ul>
    </div>

@endsection
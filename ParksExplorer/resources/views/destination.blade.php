@extends('layout.app')

@section('content_gen')


    <h1><span id="dest_title">{{$dest->name}}</span></h1>
    <br>
    <span>timezone : {{$dest->timezone}}</span>
    <br>
    <div id="parks">
        <ul class="list-group list-group-flush">
        @foreach($parks as $park)
        <a href="{{route('Park', ['id' => $park->id ])}}" class="list-group-item">{{$park->name}}</a>
        @endforeach
        </ul>
    </div>
    <div>
    @if(is_null($dest->latitude))
    <span> no coordinates founded </span>
    @else
    <iframe width="600" height="400" id="gmap_canvas"
        src="https://maps.google.com/maps?q={{$dest->latitude}}%C2%B0,%20{{$dest->longitude}}%C2%B0 &t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
         scrolling="no" marginheight="0" marginwidth="0"></iframe>
    @endif     
    </div>  


@endsection

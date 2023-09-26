@extends('layout.app')

@section('content_gen')

<script src="filter.js"></script>

<h1><span id="park_title">{{$park->name}}</span></h1>

<p>
    <span id="location">Location : {{$park->location}} ({{$park->country}})</span>
    <br>
    <span id="capacity">Capacity : {{$park->capacity}} people</span>
    <ul id="prices">Prices: 
        <li>Adult:
        @if(!is_null($park->adultPrice))    
        {{$park->adultPrice}}
        @else
        no price found
        @endif
    </li>
        <li>Child: 
        @if(!is_null($park->childPrice))    
        {{$park->childPrice}}
        @else
        no price found
        @endif
    </li>
    </ul><br>    
    <a href="{{$park->url}}">Url: {{$park->url}}</a>
    <br>
    @if(!is_null($park->image))
    <img src="{{$park->image}}">
    <br>
    @else
    <span>no image found</span>
    </br>
    @endif
</p>
<br>
<h4>Rides: </h4>
<br>
<label for="types_of_ride">Type :</label>
<select class="form-select form-select-lg shadow-none bg-light" name="types" id="types_of_ride">
    <option value="none">none</option>
    @foreach($types as $type)    
    <option value="{{$type->id}}">{{$type->name}}</option>
    @endforeach
</select>

<div class="container-fluid">
<div class="card" style="width:auto">
  <ul class="list-group list-group-flush" id="list_rides">  
@foreach($rides as $ride) 
    <li class="list-group-item" id="{{$ride->type_id}}">
    <span> {{$ride->name}} | </span> 
    <span>
    @if(is_null($ride->capacity))
    Capacity : no information knowed
    @else
    Capacity : {{$ride->capacity}} people
    @endif
    </span>  
    </li>          
@endforeach
  </ul>
</div>
</div>
@endsection

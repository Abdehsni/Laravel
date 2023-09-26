@extends('layout.app')

@section('content_gen')


<script src="research.js"></script>

<div class="jumbotron">
    <h2>Search Park</h2>
</div>
<div>
<form id="startSearch">
    <div class="input-group mb-3">
        <input type="text" name ="keyWords" class="form-control" placeholder="Search Here" id="searchBox">
        <button class="input-group-text shadow-none px-4 btn-warning">
            <i class="bi bi-search"></i>
        </button>
    </div>
</form>
<div class="container-fluid">
<div class="card" style="width:auto">
  <ul class="list-group list-group-flush" id="list_result">        
  </ul>
</div>  
</div>
</div>

@endsection
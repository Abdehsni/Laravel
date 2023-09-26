<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ParksExplorer</title>
    <link rel="stylesheet" href="/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

<body>
<div class="container-fluid">  
<div class='row'>
  <div class='col p-0'>
    <nav class="navbar navbar-expand-lg navbar-light " id="menu_navigation">
        <a class="navbar-brand" href="{{route('Home')}}">
          <img src="/icons8-parc-dattractions-96.png" width="40" height="40" class="d-inline-block align-top" alt=""> ParksExplorer
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('Destinations')}}">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Destination')}}">OneDestination</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Park')}}">Park</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('Search')}}">Search</a>
            </li>
          </ul>
      </nav>     
  </div>
</div>
  
<div class='row' id="real_body">
  <div class='col p-0'>
      @yield('content_gen')
  </div>
</div>  

<div class="row">
  <div class="col p-0">
    <footer>
    <div class="text-center text-white" style="background-color: #21081a;">
      <div class="container p-4"></div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 Abderrahmane , WEBR4 
       </div>
      </div>
    </footer>
  </div>
</div>  
</div> 
</body>
</html>
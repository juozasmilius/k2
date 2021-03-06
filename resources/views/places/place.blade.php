@extends('layouts.main')

@section('content')

@include('inc.search')
<br>
<h1 class="card-title font-weight-bold text-dark text-center text-uppercase ">{{$place->pavadinimas}}</h1>
<br>


 <!-- ABOUT START -->
 <div class="card-deck justify-content-center">
  <div class="card bg-light">
    <div class="card-header text-center"><img class="card-img-top w-25" src="../storage/vietos/icons/001.png" alt="Kontaktai"></div>
    <div class="card-body">
      <h4 class="card-title font-weight-bold text-dark text-center">Vieta</h4>
      <p class="card-text"><strong>Tipas:</strong> {{$place->tipas}}</p>
      <p class="card-text"><strong>Adresas:</strong> {{$place->adresas}}, {{$place->miestas}}, {{$place->rajonas}} sav.</p>
      <p class="card-text"><strong>Koordinatės:</strong> {{$place->koordinates}}</p>
      <p class="card-text"><strong>Šaltinis:</strong> <a href="http://{{$place->saltinis}}" target="_blank" alt="{{$place->pavadinimas}}">plačiau</a></p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-header text-center"><img class="card-img-top w-25"  src="../storage/vietos/icons/002.png" alt="Kontaktai"></div>
    <div class="card-body">
      <h4 class="card-title font-weight-bold text-dark text-center">Aprašymas</h4>
      <p class="card-text">{{$place->aprasymas}}</p>
    </div>
  </div>
  <div class="card bg-light">
    <div class="card-header text-center"><img class="card-img-top w-25" src="../storage/vietos/icons/003.png" alt="Kontaktai"></div>
    <div class="card-body">
      <h4 class="card-title font-weight-bold text-dark text-center">Žemėlapis</h4>
      <p class="card-text text-center"><a href="https://www.google.lt/maps/dir/{{$place->koordinates}}" class="font-weight-bold text-dark " target="_blank" alt="{{$place->pavadinimas}}"><img class="img-fluid" src="../storage/vietos/icons/map.jpg" alt="{{$place->pavadinimas}}"></a></p>  
    </div>
  </div>
</div>
<br>
<br>
<!-- ABOUT END -->
<!-- CARUSEL START -->
@if(!empty($place->paveikslelis))
<div id="carouselPlace" class="carousel slide carousel-fade align-self-center"  data-ride="carousel">
  <div class="carousel-inner ">
   <!-- if($pavs->count() > 0)-->
   <div></div>
   <div class="carousel-item active">
      <a href="../storage/vietos/picture/{{$place->paveikslelis}}" target="_blank"><img class="d-block" style="width: 600px; height: 50%;" src="../storage/vietos/picture/{{$place->paveikslelis}}?auto=yes" alt="First slide"></a>
    </div>
    <div></div>
    <!-- elseif($pavs->count() > 1)
        foreach ($pavs as $pav)
        <div class="carousel-item">
        <img class="d-block w-100" src="../storage/vietos/picture/{{$place->name}}?auto=yes&bg=666&fg=444&text=antra$i" alt="Second slide">
        </div>
        endforeach
    endif-->
  </div>
  <a class="carousel-control-prev" href="#carouselPlace" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselPlace" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 @endif
 <br>
 <hr>
 <!-- CARUSEL END -->
<!-- COMENTS START -->

<h1 class="font-weight-bold text-dark text-center text-uppercase ">Komentarai</h1>




<!-- COMENTS END -->
@endsection

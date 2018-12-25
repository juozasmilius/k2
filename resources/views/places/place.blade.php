@extends('layouts.main')

@section('content')

@include('inc.search')
<h1 class="card-title font-weight-bold text-dark text-center text-uppercase ">{{$place->pavadinimas}}</h1>
<!-- CARUSEL START -->
@if(!empty($place->paveikslelis))
<div id="carouselPlace" class="carousel slide carousel-fade align-self-center"  data-ride="carousel">
  <div class="carousel-inner ">
   <!-- if($pavs->count() > 0)-->
   
   <div class="carousel-item active">
      <img class="d-block w-100" style=" height: 100%;" src="../storage/vietos/picture/{{$place->paveikslelis}}?auto=yes" alt="First slide">
    </div>
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
 <hr>
 <!-- CARUSEL END -->

 <!-- ABOUT START -->
 <div class="card-deck justify-content-center">
 <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header text-center"><img style="width: 6rem;" src="../storage/vietos/icons/001.png" alt="Kontaktai"></div>
  <div class="card-body">
    <h5 class="card-title font-weight-bold text-dark text-center">Vieta</h5>
    <p class="card-text"><strong>Tipas:</strong> {{$place->tipas}}</p>
    <p class="card-text"><strong>Adresas:</strong> {{$place->adresas}}, {{$place->miestas}}, {{$place->rajonas}} sav.</p>
    <p class="card-text"><strong>Koordinatės:</strong> {{$place->koordinates}}</p>
    <p class="card-text"><strong>Šaltinis:</strong> <a href="{{$place->saltinis}}" target="_blank" alt="{{$place->pavadinimas}}">plačiau</a></p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 26rem;">
  <div class="card-header text-center"><img style="width: 6rem;" src="../storage/vietos/icons/002.png" alt="Kontaktai"></div>
  <div class="card-body">
    <h5 class="card-title font-weight-bold text-dark text-center">Aprašymas</h5>
    <p class="card-text">{{$place->aprasymas}}</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header text-center"><img style="width: 6rem;" src="../storage/vietos/icons/003.png" alt="Kontaktai"></div>
  <div class="card-body">
    <h5 class="card-title font-weight-bold text-dark text-center">Žemėlapis</h5>
    <p class="card-text text-center"><a href="https://www.google.lt/maps/dir/{{$place->koordinates}}" class="font-weight-bold text-dark " target="_blank" alt="{{$place->pavadinimas}}"><img style="width: 15rem;" src="../storage/vietos/icons/map.jpg" alt="{{$place->pavadinimas}}"></div></a></p>
  </div>
</div>
</div>

<!-- ABOUT END -->

<!-- COMENTS START -->

<h1 class="card-title font-weight-bold text-dark text-center text-uppercase ">Komentarai</h1>


<!-- COMENTS END -->
@endsection

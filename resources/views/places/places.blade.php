@extends('layouts.main')

@section('content')


<form action="places" method="GET" class="form-inline">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="s" placeholder="Paieška" value="{{ isset($s) ? $s : '' }}">
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit"><i class="fas fa-search"></i></button>
    </div>
</form>
<hr>
@if($places->count() > 0)

<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
?>
<div class="row">
    <div class="card-deck">
        @foreach ($places as $place) 
                
                        <div class="card w-33">
                        <img class="card-img-top" src="storage/vietos/picture/{{$place->paveikslelis}}" alt="{{$place->pavadinimas}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$place->pavadinimas}}</h5>
                                <p class="card-text">{{$place->trumpas_aprasymas}}</p>
                            </div>
                            <div class="card-footer text-right">
                            <a href="places/{{$place->id}}" class="btn btn-outline-primary">{{__("Plačiau")}}</a>
                            </div>
                        </div>
                
        <?php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div></div><br><div class="row"><div class="card-deck">';
        ?>
        @endforeach
    </div>
</div>
    {{$places->appends(['s' => $s])->links()}}
@endif
<!-- Carousel -->
<div class="text-center">
  <h1>Lankytinos vietos</h1>  
</div>

@include('landing.landpramogos')


<!-- -->
<br><hr><br>
<div class="text-center">
    <h1>APGYVENDINIMAS</h1>
  </div>

  @include('landing.landpramogos')


@endsection

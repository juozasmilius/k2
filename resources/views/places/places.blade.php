@extends('layouts.main')

@section('content')

@include('inc.search')



@if($places->count() > 1)

<?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 3;
$rowCount = 0;
?>

    <div class="card-deck">
        @foreach ($places as $place)
           
            <div class="card w-33"> 
            @if($place->paveikslelis != null)
                <a href="places/{{$place->id}}"><img class="card-img-top" style="height:232px" src="storage/vietos/picture/{{$place->paveikslelis}}" alt="{{$place->pavadinimas}}"></a>
            @else
                <a href="places/{{$place->id}}"><img class="card-img-top" style="height:232px" src="storage/vietos/picture/nera.jpg" alt="{{$place->pavadinimas}}"></a>
            @endif
                @if(!empty($place->paveikslelis))
                    
                @endif
                <div class="card-body">
                    <a href="places/{{$place->id}}"><h5 class="card-title font-weight-bold text-dark text-center">{{$place->pavadinimas}}</h5></a>
                    <p class="card-text">{{$place->trumpas_aprasymas}}</p>
                </div>
                <div class="card-footer text-right">
                    <div class="row">
                        <div class="col justify-center">
                        <i class="fa fa-heart"> {{ $place->perziuros }}</i>
                        <i class="fa fa-eye"> {{ $place->perziuros }}</i> 
                        </div>
                        <div class="col">
                            <a href="places/{{$place->id}}" class="btn btn-outline-primary ">{{__("Plačiau")}}</a>
                        </div>
                    </div>  
                </div>
            </div>
        <?php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div><br><div class="card-deck">';
        ?>
        @endforeach
    </div>

    {{$places->appends(['s' => $s, 'r' => $r, 'p' => $p, 't' => $t])->links()}}
@elseif($places->count() < 2)
    @foreach ($places as $place)
        <div class="card" style="width: 30%;">
            @if(!empty($place->paveikslelis))
                <a href="places/{{$place->id}}"><img class="card-img-top" style="height:232px" src="storage/vietos/picture/{{$place->paveikslelis}}" alt="{{$place->pavadinimas}}"></a>
            @endif
            <div class="card-body">
                <a href="places/{{$place->id}}"><h5 class="card-title font-weight-bold text-dark text-center">{{$place->pavadinimas}}</h5></a>
                <p class="card-text">{{$place->trumpas_aprasymas}}</p>
            </div>
            <div class="card-footer text-right">
                <a href="places/{{$place->id}}" class="btn btn-outline-primary">{{__("Plačiau")}}</a>
            </div>
        </div>
    @endforeach
@endif

@endsection

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
                @if(!empty($place->paveikslelis))
                    <a href="places/{{$place->id}}"><img class="card-img-top" src="storage/vietos/picture/{{$place->paveikslelis}}" alt="{{$place->pavadinimas}}"></a>
                @endif
                <div class="card-body">
                    <a href="places/{{$place->id}}"><h5 class="card-title font-weight-bold text-dark text-center">{{$place->pavadinimas}}</h5></a>
                    <p class="card-text">{{$place->trumpas_aprasymas}}</p>
                </div>
                <div class="card-footer text-right">
                    <a href="places/{{$place->id}}" class="btn btn-outline-primary">{{__("Plačiau")}}</a>
                </div>
            </div>
        <?php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div><br><div class="card-deck">';
        ?>
        @endforeach
    </div>

    {{$places->appends(['s' => $s])->links()}}
@elseif($places->count() < 2)
    @foreach ($places as $place)
        <div class="card" style="width: 30%;">
            @if(!empty($place->paveikslelis))
                <a href="places/{{$place->id}}"><img class="card-img-top" src="storage/vietos/picture/{{$place->paveikslelis}}" alt="{{$place->pavadinimas}}"></a>
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

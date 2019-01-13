@extends('layouts.main')

@section('content')
<h3>{{__('Pridėti lankytiną vietą')}}</h3>

{!! Form::open(['action' => 'PlacesController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('pavadinimas') }}
    {{ Form::bsTextarea('trumpas_aprašymas') }}
    {{ Form::bsTextarea('aprašymas') }}
{!! Form::close() !!}


@endsection
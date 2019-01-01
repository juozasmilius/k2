@extends('layouts.main')

@section('content')
<h3>{{__('Pridėti lankytiną vietą')}}</h3>
{{Request::server('HTTP_ACCEPT_LANGUAGE')}}
{!! Form::open(['action' => 'PlacesController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('pavadinimas') }}
    {{Form::selectMonth('month')}}
{!! Form::close() !!}
@endsection
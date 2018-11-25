@extends('layouts.main')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">CREATE CATEGORIES</h5>
                {!!Form::open(['action' => 'CategoriesController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    @csrf
                    {{Form::bsText('Pavadinimas', '',['placeholder' => 'Kategorijos pavadinimas'])}}
                    {{Form::bsTextarea('Aprašymas', '',['placeholder' => 'Kategorijos aprašymas'])}}
                    {{Form::file('cat_img')}}<br><br>
                    {{Form::bsSubmit('Išsaugoti',['class' => 'btn btn-outline-primary float-right'])}}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>



@endsection
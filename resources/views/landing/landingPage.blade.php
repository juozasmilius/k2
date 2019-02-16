@extends('layouts.main')

@section('content')


  <div class = "row justify-content-center">
    <img class="img-fluid" src="https://source.unsplash.com/1200x300/?nature,water" alt="Card image cap">
    <div id="KP01_1160x250"></div>
  </div>
<br>
<div class = "row justify-content-center">
  <div class = "col-12 col-md-8">
      <div class="text-center">
        <h1>Sveiki atykę į atsinaujinusį Kapamatyti tinklapį</h1>  
      </div>
      @include('business.reklama')
  </div>
  <div class = "col-md-3.5">
    <img class="img-fluid" src="https://source.unsplash.com/300x600/?nature,water" alt="Card image cap">
    <div id="KP02_300x600_1"></div>
    <div id="KP07_Mobile_300x250_1"></div>
    <div id="KP03_300x600_2"></div>
    <div id="KP08_Mobile_300x250_2"></div>
    <div id="KP00_pixel"></div>
    <div id="KP06_Mobile_Pixel"></div>
  </div>
</div>

@endsection

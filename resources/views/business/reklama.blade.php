<!-- Carousel -->
<div class="text-center">
  <h1>Lankytinos vietos</h1>  
</div>

@include('business.lankytinos')


<!-- -->
<br><hr><br>
<div class="text-center">
    <h1>APGYVENDINIMAS</h1>
  </div>

  @include('business.apgyvendinimas')


  @if(count($randomai) > 0)
    @foreach ($randomai as $random)
      <h1>{{$random->id}}</h1>
    @endforeach
  @endif
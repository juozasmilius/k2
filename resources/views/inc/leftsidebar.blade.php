<nav class="d-none d-md-block bg-white sidebar">
    <div class="sidebar-sticky">
        <div class="card text-center">
            <div class="card-header">
                <img src="../storage/avatar/juozasmilius.jpg" alt="{{ Auth::user()->name }}" class="rounded-circle justify-content-center" style="width:8rem;">
            </div>
            <div class="car-body">
                <div class="container">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-auto card-title font-weight-bold">{{ Auth::user()->name }}</div>
                        <div class="col">
                            <a href="#" alt="{{__('Redaguoti profilį')}}"><img src="../storage/vietos/icons/settings.png" style="width:1rem;"></a>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();" alt="{{__('Atsijungti')}}">
                                             <img src="../storage/vietos/icons/logout.png" style="width:1rem;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ __('Blogas')}}
                        </button>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Ištrinta')}}</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed text-dark" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{ __('Lankytinos vietos')}}
                        </button>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="btn btn-light" href="{{route('places.create')}}" role="button">{{__('Pridėti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Ištrinta')}}</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('Pramogos')}}
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Ištrinta')}}</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('Nakvynė')}}
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Ištrinta')}}</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('Vartotojai')}}
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Ištrinta')}}</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{__('Reklama')}}
                        </button>
                    </h5>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
                        <a class="btn btn-light" href="#" role="button">{{__('Ištrinta')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
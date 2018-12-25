<nav class="col-md-2 d-none d-md-block bg-white sidebar">
    <div class="sidebar-sticky">
    <div class="card text-center">
        <div class="card-header">
            <img src="storage/avatar/juozasmilius.jpg" alt="..." class="rounded-circle justify-content-center" style="width:8rem;">
        </div>
        <div class="car-body">
            <div class="card-title">{{ Auth::user()->name }}</div>
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
      <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
      <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
      </div>
    </div>
    <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-dark" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          {{ __('Vartotojai')}}
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
      <a class="btn btn-light" href="#" role="button">{{__('Pridėti')}}</a>
      <a class="btn btn-light" href="#" role="button">{{__('Redaguoti')}}</a>
      </div>
    </div>
  </div>
  </div>
</div>

        <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link active" href="/">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Orders
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Products
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Customers
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="bar-chart-2"></span>
                Reports
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Integrations
            </a>
            </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Saved reports</span>
            <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
            </a>
        </h6>
        <ul class="nav flex-column mb-2">
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Current month
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Last quarter
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Social engagement
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Year-end sale
            </a>
            </li>
        </ul>
    </div>
</nav>
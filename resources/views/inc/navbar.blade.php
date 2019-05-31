<nav class="navbar navbar-expand navbar-dark bg-dark">
  <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'blog') }}</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button> --}}

      <div class="collapse navbar-collapse" id="navbarsExample02">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav mr-auto">
            
          </ul>
          <ul class="navbar-nav mr-auto container-fluid">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
              </li>
              <li class="nav-item">
                      <a class="nav-link" href="/services">Services</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="/insert_product">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/form">Forms</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/form_product">|Forms - Product|</a>
                  </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ml-auto">
              <!-- Authentication Links -->
              @guest
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
                  @if (Route::has('register'))
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                  @endif
              @else
                  <li class="nav-item dropdown m-auto">
                      <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="/dashboard">Dashboard</a>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="fas fa-sign-out-alt"></i>
                                  {{ __('Logout') }} 
                                
                          </a>
                          
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
              @endguest
          </ul>
      </div>
  </div>
</nav>

      {{-- <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="/">{{config('app.name','blog')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/services">Services</a>
             </li>
            <li class="nav-item">
              <a class="nav-link" href="/insert_product">Insert</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="/form">Forms</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/form_product">|Forms - Product|</a>
                </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search">
          </form>
        </div>
      </nav> --}}

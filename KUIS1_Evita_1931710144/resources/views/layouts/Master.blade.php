<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top" style="background-color:#808000">
    <div class="container">
    <img class="d-flex mr-3 rounded-circle" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSq_JhFl2ryDrLA4PLfBoVTL1hQZ1OPi__1JA&usqp=CAU" alt="" height="65" width="65">
                        
      <a class="navbar-brand" href="#"> <h3>Travelling Kuy!</h3> </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
        @can('user-display')
        <a class="nav-link" href="{{ url('./home') }}">Home</a>
        @endcan
        </li>
        <li class="nav-item">
        @can('user-display')
        <a class="nav-link" href="{{ url('./about') }}">About</a>
        @endcan
        </li>
          <li class="nav-item {{ Route::is('contact')? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('./contact') }}">Contact</a>
            @endcan
          </li>
          
          <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}">
            @can('manage-articles')
              <a class="nav-link" href="{{ url('./manage') }}">Manage Article</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('manageuser') ? 'active' : '' }}">
            @can('manage-articles')
              <a class="nav-link" href="{{ url('./manageuser') }}">Manage User</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('pemesananuser')? 'active' : '' }}">
          @can('user-display')
            <a class="nav-link" href="{{ url('./pemesananuser') }}">Pesan Tour</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('pemesanan')? 'active' : '' }}">
            @can('manage-articles')
            <a class="nav-link" href="{{ url('./pemesanan') }}">Pemesanan</a>
            @endcan
          </li>
          <li class="nav-item {{ Route::is('message')? 'active' : '' }}">
            @can('manage-articles')
            <a class="nav-link" href="{{ url('./message') }}">Message</a>
            @endcan
          </li>

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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                </div>
                                

                                </div>
                                <div class="header-right-side">
                                <div class="language header-right-item">
                                <div class="current-language">
                                <span class="language-flag">
                                <img src="https://www.tiket.com/to-do/assets/id-flag.png" alt="flag"/>
                                </span>
                                <div class="language-modal header-modal" style="transition:all 300ms ease-in;opacity:0;visibility:hidden;margin-top:-35px;">
                                <div class="language-option">
                                <span class="language-flag">
                                <img src="https://www.tiket.com/to-do/assets/id-flag.png" alt="flag id"/> </span>
                                <span class="language-label active">Indonesia</span>
                                </div>
                            </li>
                        @endguest
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')
 
  <!-- /.container -->


<!-- Footer -->
<footer class="py-5 bg-blue fixed-below" style="background-color:#6B8E23">
    <div class="container">
      <p class="m-0 text-center text-white">Elfira & Evita</p>
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.6/swiper-bundle.min.css" integrity="sha512-iDPwu4/flStAQwiwb+w4cNFOxNkc61+a8/f0ut0sb8krDqKCLvuE8wj8MFUGlT71OBSDtpYwbU4BPg0f+qO9vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" integrity="sha512-q54FvbV+gGBn+NvgaD4gpJ7w4wrO00DgW7Rx503PIhrf0CuMwLOwbS+bXgOBFSob+6GVy1HDPfaRLJ8w2jiS4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('css/brent-oxphone.css') }}" >

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.6/swiper-bundle.min.js" integrity="sha512-CGsqPVUZUUVx5RS41AFdu5Ghj3cKcpHxg7ae66br18nqK5dTPJ2k6srKYVHMMIvaq96QIoOE8JrqXrlWuppfEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/jquery.easings.min.js" integrity="sha512-rXZZDfRSa6rsBuT78nRTbh1ccwpXhTCspKUDqox3hUQNYdjB6KB6mSj6mXcB9/5F5wODAJnkztXPxzkTalp11w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js" integrity="sha512-bxzECOBohzcTcWocMAlNDE2kYs0QgwGs4eD8TlAN2vfovq13kfDfp95sJSZrNpt0VMkpP93ZxLC/+WN/7Trw2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.extensions.min.js" integrity="sha512-0xW5KFMtT462F65vVvIejNawM1U2Fp/yhItmQVFUwdYP+R9tQFCn4QtLEhkp6RoGovZ6YCvbxy+GVCtGv0+nvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL::asset('js/index.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ URL::asset('images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
                {{ __('Brent Oxphone') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <button class="btn btn-outline-dark font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModal">Login</button>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button class="btn btn-outline-dark font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModal2">Register</button>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <!-- Modals -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form id="login">
              <div class="row">
                <div class="column">
                  <div class="card">
                    <img src="https://cdn1.iconfinder.com/data/icons/occupations-3/100/21-512.png" height="100" weight="100">
                      <a class="btn btn-dark" href="{{route('teacher.login')}}">Teacher</a>
                  </div>
                </div> 
                <div class="column">
                  <div class="card">
                    <img src="https://cdn.pixabay.com/photo/2017/06/22/02/16/computer-icon-2429310_960_720.png" height="100" weight="100">
                      <a class="btn btn-dark" href="{{route('user.login')}}">Student</a>
                  </div>
                </div>
                <div class="column">
                  <div class="card">
                    <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/371299-200.png" height="100" weight="100">
                      <a class="btn btn-dark" href="{{route('admin.login')}}">Admin</a>
                  </div>
                </div> 
              </div> 
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Register</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="register">
              <div class="row">
                <div class="column2">
                  <div class="card2">
                    <img src="https://cdn1.iconfinder.com/data/icons/occupations-3/100/21-512.png" height="100" weight="100">
                      <a class="btn btn-dark" href="{{route('teacher.register')}}">Teacher</a>
                  </div>
                </div> 
                <div class="column2">
                  <div class="card2">
                    <img src="https://cdn.pixabay.com/photo/2017/06/22/02/16/computer-icon-2429310_960_720.png" height="100" weight="100">
                      <a class="btn btn-dark" href="{{route('user.register')}}">Student</a>
                  </div>
                </div>
                <!---------<div class="column">
                  <div class="card">
                    <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/371299-200.png" height="100" weight="100">
                      <a class="btn btn-dark" href="#">Admin</a>
                  </div> 
                </div> -->
              </div> 
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  
          </div>
        </div>
      </div>
    </div>
            
        </main>@yield('content')
    </div>
    <style>
      /* Float four columns side by side */
      .column { float: left; width: 33%; padding: 0 10px; }
    /* Remove extra left and right margins, due to padding */
      .row {margin: 0 -5px;}
    /* Clear floats after the columns */
      .row:after {  content: "";display: table; clear: both;}

    /* Responsive columns */
    @media screen and (max-width: 600px) {
     .column {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
    }

/* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
  }
  .card:hover {
    text-align: center;
    background-color: lightgreen;
  }
  .card2 {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    text-align: center;
    background-color: #f1f1f1;
  }
  .card2:hover {
    text-align: center;
    background-color: lightblue;
  }
  .column2 { float: left;  padding: 10 25px;width: 50%; }
    </style>
</body>
</html>

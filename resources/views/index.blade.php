<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.6/swiper-bundle.min.css" integrity="sha512-iDPwu4/flStAQwiwb+w4cNFOxNkc61+a8/f0ut0sb8krDqKCLvuE8wj8MFUGlT71OBSDtpYwbU4BPg0f+qO9vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.css" integrity="sha512-q54FvbV+gGBn+NvgaD4gpJ7w4wrO00DgW7Rx503PIhrf0CuMwLOwbS+bXgOBFSob+6GVy1HDPfaRLJ8w2jiS4g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ URL::asset('css/brent-oxphone.css') }}" >
    <title>Brent Oxphone</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <a class="navbar-brand" href="#">
        <img src="{{ URL::asset('images/logo.png') }}" width="30" height="30" class="d-inline-block align-top" alt="">
        Brent Oxphone
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control" type="search" placeholder="Search Course" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0 btn-sm-block" type="submit"><span class="d-lg-none d-sm-block">Search</span><i class="fa-solid fa-magnifying-glass"></i></button>

        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button class="btn btn-outline-dark font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModal">Login</button>
          </li>
          <li class="nav-item mx-lg-2 my-2 my-lg-0">
            <button class="btn btn-dark font-weight-bold" href="#" data-toggle="modal" data-target="#exampleModal2">Register</button>
          </li>
        </ul>
      </div>
    </nav>
    <div id="fullpage">
      <section class="section">
        <div class="swiper mySwiper swiper-index">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="content-image" style="background-image: url('https://via.placeholder.com/1920x1080');"></div>
            </div>
            <div class="swiper-slide">
              <div class="content-image" style="background-image: url('https://via.placeholder.com/870x500');"></div>
            </div>
          </div>
          <div class="swiper-pagination swiper-index-pagination"></div>
        </div>
      </section>
      <section class="section container-fluid pt-5 px-5">
        <h1 class="d-none d-lg-block">A Wide Variety of Available Courses</h1>
        <h4 class="d-none d-sm-block">A Wide Variety of Available Courses</h4>
          <div class="swiper swiper-courses pt-1 pb-5 px-lg-5 mx-lg-5">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card">
                  <img class="card-img-top" src="https://via.placeholder.com/870x500" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-button-next swiper-button-course-next d-none d-lg-block"></div>
            <div class="swiper-button-prev swiper-button-course-prev d-none d-lg-block"></div>
            <div class="swiper-pagination swiper-course-pagination"></div>
          </div>
      </section>
    </div>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.6/swiper-bundle.min.js" integrity="sha512-CGsqPVUZUUVx5RS41AFdu5Ghj3cKcpHxg7ae66br18nqK5dTPJ2k6srKYVHMMIvaq96QIoOE8JrqXrlWuppfEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/vendors/jquery.easings.min.js" integrity="sha512-rXZZDfRSa6rsBuT78nRTbh1ccwpXhTCspKUDqox3hUQNYdjB6KB6mSj6mXcB9/5F5wODAJnkztXPxzkTalp11w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js" integrity="sha512-bxzECOBohzcTcWocMAlNDE2kYs0QgwGs4eD8TlAN2vfovq13kfDfp95sJSZrNpt0VMkpP93ZxLC/+WN/7Trw2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.extensions.min.js" integrity="sha512-0xW5KFMtT462F65vVvIejNawM1U2Fp/yhItmQVFUwdYP+R9tQFCn4QtLEhkp6RoGovZ6YCvbxy+GVCtGv0+nvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ URL::asset('js/index.js') }}"></script>
    <script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: ".swiper-index-pagination",
          clickable: true,
        },
      });
      var swiper2 = new Swiper(".swiper-courses", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: false,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-course-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-course-next",
          prevEl: ".swiper-button-course-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
      });
      $('#fullpage').fullpage({
        //options here
        autoScrolling:true,
        scrollHorizontally: true
      });

    </script>
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
    padding: 16pxs;
    text-align: center;
    background-color: #f1f1f1;
  }
  .card2:hover {
    text-align: center;
    background-color: lightblue;
  }
  .column2 { float: left;  padding: 0 25px; }
    </style>
  </body>
</html>
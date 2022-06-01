
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    Document Title-->
    <title>Zenflix - Movie,Tv Show Online</title>

    <!--    Favicons-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicons/favicon.png') }}">

    <!--    Stylesheets-->
    <link rel="stylesheet" crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==">
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet" />

    <link href="{{ asset('vendors/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  </head>
  <body>
    <!--    Main Content-->
    <main class="main" id="top">
      <nav class="navbar navbar-light sticky-top" data-navbar-darken-on-scroll="900">
        <div class="container"><img href="index.html" src="{{ asset('img/logo.png') }}" alt="..." /></a>
        @if (Route::has('login'))
          <div class="navbar-nav my-2">
            @auth
            <a class="btn btn-primary bt-sm" href="{{ url('/home') }}">Beranda</a>
            @else
            <a class="btn btn-secondary bt-sm" href="{{ route('login') }}">Masuk</a>
            @endauth
        @endif
          </div>
        </div>
      </nav>

      <!-- <section> begin ============================-->
      <section class="mt-6">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-9 col-lg-8 col-xl-5">
              <h1 class="display-3 lh-sm"><img src="{{ asset('img/mobile.png')}}">
            </div>
            <div class="col-md- col-xl-5">
              <p class="fs-2">Temukan Film dan Serial Tv terlengkap hanya disini,Tanpa iklan,dan membayar apapun.</p>
            @if (Route::has('register'))
              @auth
              @else
              <a class="btn btn-primary mt-3" href="{{ route('register') }}">Daftar Sekarang</a>
              @endauth
            @endif
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
      <section>
        <div class="container"><img class="img-fluid" src="{{ asset('img/dashboard.png') }}" alt="Dashboard" />
        </div>
     </section>
      <!-- <section> close ============================-->

      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row mx-md-5 px-md-5 d-flex justify-content-evenly">
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/google.png') }} " alt="Google" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/slack.png') }} " alt="Slack" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/amazon.png') }} " alt="Amazon" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/zoom.png') }} " alt="Zoom" style="height:30px;" /></div>
            <div class="col-4 col-lg-auto mt-5 mt-lg-0"><img src="{{ asset('img/gallery/brands/netflix.png') }} " alt="Netflix" style="height:30px;" /></div>
          </div>
          <div class="px-xl-8 px-md-7">
            <hr class="mt-7 text-1000" />
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> begin ============================-->
      <section class="bg-secondary">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 text-center text-xl-start"><a href="#!"><img class="footer-img me-xl-5 me-3" src="{{ asset('img/gallery/facebook-line1.svg')}}" alt="fb" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="{{ asset('img/gallery/linkedin-line1.svg') }}" alt="in" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="{{ asset('img/gallery/twitter-line1.svg') }}" alt="twitter" style="width:20px;height:20px;" /></a><a href="#!"><img class="footer-img me-xl-5 me-3" src="{{ asset('img/gallery/instagram-line1.svg') }}" alt="instragram" style="width:20px;height:20px;" /></a>
            </div>
            <div class="col-xl-4 pt-2 pt-xl-0">
              <p class="mb-0 text-center text-xl-end"><a class="text-300 text-decoration-none footer-link" href="#!"> Terms &amp; conditon </a><a class="text-300 text-decoration-none footer-link ps-4" href="#!">Privacy Policy </a>
              </p>
            </div>
            <div class="col-xl-5 pt-2 pt-xl-0 text-center text-xl-end">
              <p class="mb-0">&copy; Made with ❤️ by Zenflix Team</a></p>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
    </main>
    <!--    JavaScripts-->
    <script src="{{ asset('vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper-bundle.min.js') }}"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <script src="{{ asset('js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400&amp;display=swap" rel="stylesheet">
  </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/slider-radio.js') }}"></script>
	<script src="{{ asset('js/select2.min.js') }}"></script>
	<script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/plyr.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-grid.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/slider-radio.css') }}">
	<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
	<link rel="stylesheet" href="{{ asset('css/plyr.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>
<!-- sign in -->
<div class="sign section--full-bg" data-bg="{{url('img/bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form method="POST" action="{{ route('login') }}" class="sign__form">
                        @csrf

                        <a href="{{url('/')}}" class="sign__logo">
                            <img src="{{ asset('img/logo.svg') }}" alt="">
                        </a>

                        <div class="sign__group">
                            <input for="email" id="email" name="email" type="email" class="sign__input" placeholder="Email" required>
                        </div>

                        <div class="sign__group">
                            <input for="password" name="password" id="password" type="password" class="sign__input" placeholder="Password" required>
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}">
                            <label for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        
                        <button class="sign__btn" type="submit" name="submit">{{ __('Login') }}</button>

                        <span class="sign__text">Don't have an account? <a href="{{url('/register')}}">Sign up!</a></span>

                        @if (Route::has('password.request'))
                        <span class="sign__text"><a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
                        @endif

                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>


<!-- end sign in -->
</body>
</html>

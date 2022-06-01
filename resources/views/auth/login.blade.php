@extends('layouts.view')

@section ('content')
<!-- sign in -->
<div class="sign section--full-bg" data-bg="{{url('img/bgs.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- authorization form -->
                    <form method="POST" action="{{ route('login') }}" class="sign__form">
                        @csrf

                        <a href="{{url('/')}}" class="sign__logo">
                            <img src="{{ asset('img/logo.svg') }}" style="width: auto; height:auto;" alt="">
                        </a>
                        @error('email')
                            <div class="warning__label">
                                Email atau Password yang anda masukkan salah
                            </div>
                        @enderror

                        <div class="sign__group">
                            <input for="email" id="email" name="email" type="email" class="sign__input"  placeholder="Email" required>
                        </div>

                        <div class="sign__group">
                            <input for="password" name="password" id="password" type="password" class="sign__input" placeholder="Password" required>
                        </div>

                        <div class="sign__group sign__group--checkbox">
                            <input id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}">
                            <label for="remember">{{ __('Remember Me') }}</label>
                        </div>
                        
                        <button class="sign__btn" type="submit" name="submit">{{ __('Login') }}</button>

                        @if (Route::has('register'))
                        <span class="sign__text">Don't have an account? <a href="{{ route('register') }}">Sign up!</a></span>
                        @endif
                        
                        @if (Route::has('password.request'))
                        <span class="sign__text">Forgot Password? <a href="{{ route('password.request') }}">Reset Password!</a></span>
                        @endif

                    </form>
                    <!-- end authorization form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sign in -->
@endsection

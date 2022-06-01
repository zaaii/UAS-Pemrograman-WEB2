@extends ('layouts.view')

@section ('content')
<!-- sign in -->
<div class="sign section--full-bg" data-bg="{{url('img/bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="sign__content">
                    <!-- registration form -->
                    <form action="{{ route('register') }}" method="POST" class="sign__form">
                        @csrf

                        <a href="{{url('/')}}" class="sign__logo">
                            <img src="{{ asset('img/logo.svg') }}" style="width: auto; height:auto;" alt="">
                        </a>

                        <div class="sign__group">
                            <input id="name" name="name" type="text" class="sign__input" placeholder="Name" value="{{ old('name') }}" autofocus required>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="sign__group">
                            <input id="email" name="email" type="email" class="sign__input" placeholder="Email" value="{{ old('email') }}" required>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="sign__group">
                            <input id="password" name="password" type="password" class="sign__input" placeholder="Password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="sign__group">
                            <input id="password-confirm" name="password_confirmation" type="password" class="sign__input" placeholder="Confirm Password" required>
                        </div>
                        
                        <button class="sign__btn" type="submit">{{ __('Register') }}</button>

                        @if (Route::has('login'))
                        <span class="sign__text">Already have an account? <a href="{{ route('login') }}">Sign in!</a></span>
                        @endif
                    </form>
                    <!-- registration form -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end sign in -->
@endsection

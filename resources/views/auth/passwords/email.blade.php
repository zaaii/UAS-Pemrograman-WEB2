@extends('layouts.view')

@section('content')
	<!-- sign in -->
	<div class="sign section--full-bg" data-bg="{{asset('img/bg.jpg')}}">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

						<form action="{{ route('password.email') }}" method="POST" class="sign__form">
                            @csrf

							<a href="{{url('/')}}" class="sign__logo">
								<img src="{{asset('img/logo.svg')}}" style="width: auto; height:auto;" alt="">
							</a>

							<div class="sign__group">
								<input id="email" name="email" type="email" class="sign__input" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                
							</div>
                            @error('email')
                            <div class="warning__label" role="alert">
                                {{$message}}
                            </div>  
                            @enderror

							
							<button class="sign__btn" type="submit">{{ __('Send Password Reset Link') }}</button>

							<span class="sign__text">We will send an email to reset your password</span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end sign in -->

@endsection

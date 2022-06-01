@extends('errors.layout')
@section('content')
@section('title', __('Forbidden'))
<!-- Error Page -->
<div class="page-404 section--full-bg" data-bg="{{asset('img/bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-404__wrap">
                    <div class="page-404__content">
                        <h1 class="page-404__title">403</h1>
                        <p class="page-404__text">Forbidden</p>
                        <a href="{{ url('/')}}" class="page-404__btn">go back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end Error Page -->
@endsection
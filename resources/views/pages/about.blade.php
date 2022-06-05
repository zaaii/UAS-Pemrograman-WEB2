@extends('layouts.app')

@section('content')
<!-- head -->
<section class="section section--head section--head-fixed">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6">
                <h1 class="section__title section__title--head">Zenflix - Best Place For Movie</h1>
            </div>

            <div class="col-12 col-xl-6">
                <ul class="breadcrumb">
                    <li class="breadcrumb__item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb__item breadcrumb__item--active">About</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end head -->

<!-- about -->
<section class="section section--pb0">
    <div class="container">
        <div class="row">
            <!-- section text -->
            <div class="col-12">
                <p class="section__text section__text--small">Many desktop publishing packages and <a href="#">web page</a> editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                <p class="section__text section__text--small">All the Lorem Ipsum generators on the <b>Internet</b> tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
            </div>
            <!-- end section text -->
        </div>

        <div class="row row--grid">
            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">01</span>
                    <h3 class="step__title">Create an account</h3>
                </div>
            </div>
            
            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">02</span>
                    <h3 class="step__title">Select your movie</h3>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="step">
                    <span class="step__number">03</span>
                    <h3 class="step__title">Enjoy Zenflix</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- steps -->
<section class="section section--pb0 section--gradient">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section__title">Special Thanks To</h2>
            </div>
        </div>

        <div class="row row--grid">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-person" viewBox="0 0 16 16"><path d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/><path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                    </span>
                    <h3 class="feature__title"><a href="https://themeforest.net/user/dmitryvolkov/portfolio" style="color: white;">Dmitry Volkov</a></h3>
                    <p class="feature__text">Special thanks to Dmitry Volkov who provide awesome movie template.</p>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-film" viewBox="0 0 16 16">
                            <path d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0v6h8V1H4zm8 8H4v6h8V9zM1 1v2h2V1H1zm2 3H1v2h2V4zM1 7v2h2V7H1zm2 3H1v2h2v-2zm-2 3v2h2v-2H1zM15 1h-2v2h2V1zm-2 3v2h2V4h-2zm2 3h-2v2h2V7zm-2 3v2h2v-2h-2zm2 3h-2v2h2v-2z"/>
                          </svg>
                    </span>
                    <h3 class="feature__title">The Movie Database</h3>
                    <p class="feature__text">Thanks To TMDB for the API and reference for us to make this movie site.</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,2H10A3,3,0,0,0,7,5v7a3,3,0,0,0,3,3H20a3,3,0,0,0,3-3V5A3,3,0,0,0,20,2Zm1,10a1,1,0,0,1-1,1H10a1,1,0,0,1-1-1V5a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1ZM17.5,8a1.49,1.49,0,0,0-1,.39,1.5,1.5,0,1,0,0,2.22A1.5,1.5,0,1,0,17.5,8ZM16,17a1,1,0,0,0-1,1v1a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V15H4a1,1,0,0,0,0-2H3V12a1,1,0,0,1,1-1A1,1,0,0,0,4,9a3,3,0,0,0-3,3v7a3,3,0,0,0,3,3H14a3,3,0,0,0,3-3V18A1,1,0,0,0,16,17ZM6,18H7a1,1,0,0,0,0-2H6a1,1,0,0,0,0,2Z"/></svg>
                    </span>
                    <h3 class="feature__title">Choose your Plan</h3>
                    <p class="feature__text">t to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially</p>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="feature">
                    <span class="feature__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.53,7.15a1,1,0,0,0-1,0L17,8.89A3,3,0,0,0,14,6H5A3,3,0,0,0,2,9v6a3,3,0,0,0,3,3h9a3,3,0,0,0,3-2.89l3.56,1.78A1,1,0,0,0,21,17a1,1,0,0,0,.53-.15A1,1,0,0,0,22,16V8A1,1,0,0,0,21.53,7.15ZM15,15a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V9A1,1,0,0,1,5,8h9a1,1,0,0,1,1,1Zm5-.62-3-1.5V11.12l3-1.5Z"/></svg>
                    </span>
                    <h3 class="feature__title">Choose your Plan</h3>
                    <p class="feature__text">Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end steps -->

<!-- partners -->
<div class="section section--pb0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="partners owl-carousel">
                    <a href="#" class="partners__img">
                        <img src="img/partners/tmdb.svg" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/lk21.svg" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/themeforest-light-background.png" alt="">
                    </a>

                    <a href="#" class="partners__img">
                        <img src="img/partners/netflix.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end partners -->
@endsection
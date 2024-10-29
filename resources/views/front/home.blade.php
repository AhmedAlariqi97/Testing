@extends('layouts.front')

@section('content')

<div class="lang-icon">
@foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
    @if (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'en')
    <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
        <button class="button themethree">
            <div class="bloom-container">
                <div class="button-container-main">
                <div class="button-inner">
                    <div class="back"></div>
                    <div class="front">

                         <img src="{{asset('front\images\en.png')}}" class="" width="26">

                    </div>
                </div>
                <div class="button-glass">
                    <div class="back"></div>
                    <div class="front">

                    </div>
                </div>
                </div>
                <div class="bloom bloom1"></div>
                <div class="bloom bloom2"></div>
            </div>
        </button>
        </a>
    @elseif (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'ar')
    <a hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
    <button class="button themethree">
        <div class="bloom-container">
            <div class="button-container-main">
            <div class="button-inner">
                <div class="back"></div>
                <div class="front">
                   <img src="{{asset('front\images\sa.png')}}" class="" width="26">
                </div>
            </div>
            <div class="button-glass">
                <div class="back"></div>
                <div class="front">

                </div>
            </div>
            </div>
            <div class="bloom bloom1"></div>
            <div class="bloom bloom2"></div>
        </div>
    </button>
    </a>
    @endif
@endforeach

</div>

<!-- Hero Section -->
<section id="hero" class="hero section">

<div class="container">
  <div class="row gy-4">
    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
      <p data-aos="fade-up" data-aos-delay="100">We work to make the difference in excellence in your service</p>
      <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
        <a href="#about" class="btn-get-started">Get Started <i class="bi bi-arrow-right"></i></a>
        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
      <img src="{{asset('front\images\hero-img.png')}}" class="img-fluid animated" alt="">
    </div>
  </div>
</div>

</section><!-- /Hero Section -->









 <!-- Modal -->
 



@endsection

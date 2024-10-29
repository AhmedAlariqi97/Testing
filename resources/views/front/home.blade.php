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

<section class="landing-logo">
    <div class="overly"></div>
    <div class="row">
        <div class="col-12">
         {{-- <img src="{{asset('front\images\b2_burger_logo_1.png')}}" class="cover-logo-img">
          <img src="{{asset('assets/uploaded_images/' . $images['Image_B2_burger_logo'][0]['image'] ?? '')}}" class="cover-logo-img">--}}
        </div>
    </div>
</section>

<section class="landing">
        <div class="row">
            <div class="m-0 p-0">
               {{-- <img src="{{asset('uploaded_images\8-1700936418.png')}}" class="cover-img">
               <img src="{{asset('assets/uploaded_images/' . $images['Image_burger_section2'][0]['image'] ?? '')}}" class="cover-img">--}}

            </div>
        </div>
</section>

<section class="main-button">
    <div class="container">
        <div class="button-sec">
            <div class="one fadeInUp animated">
                <a href="" class="btn menu">
                <img src="{{asset('front\images\book_add.png')}}" class="icon-img">
                {{ __('front.menu') }}
                </a>
            </div>
            <div class="tow fadeInUp animated">
                <a href="" class="btn branchs" data-bs-toggle="modal" data-bs-target="#branchModal">
                   <img src="{{asset('front\images\location.png')}}" class="icon-img">
                   {{ __('front.branchs') }}
                </a>
                <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary">
                    Launch demo modal
                    </button> -->
            </div>
        </div>
    </div>
</section>







 <!-- Modal -->
 



@endsection

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
          <!-- <img src="{{asset('front\images\b2_burger_logo_1.png')}}" class="cover-logo-img"> -->
          <img src="{{asset('assets/uploaded_images/' . $images['Image_B2_burger_logo'][0]['image'] ?? '')}}" class="cover-logo-img">
        </div>
    </div>
</section>

<section class="landing">
        <div class="row">
            <div class="m-0 p-0">
                <!-- <img src="{{asset('uploaded_images\8-1700936418.png')}}" class="cover-img"> -->
               <img src="{{asset('assets/uploaded_images/' . $images['Image_burger_section2'][0]['image'] ?? '')}}" class="cover-img">

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

<section class="social-media">
    <div class="container">
        <div class="row">
            <p class="mt-4 fadeInUp animated">
               {{ strip_tags($content['Social_media_part1'][0]['value'] ?? '') }}
            <br />
            {{ strip_tags($content['Social_media_part2'][0]['value'] ?? '') }}
            </p>
            <div class="links mt-5 mb-3 fadeInUp animated">
                <ul class="list-inline mb-0 p-0 text-center">
                        <li class="list-inline-item">
                            <a href="{{ strip_tags($content['Social_media_Whatsapp_link'][0]['value'] ?? '') }}"
                                class="social-link text-center">
                                <i class="fa-brands fa-whatsapp"></i></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="{{ strip_tags($content['Social_media_TikTok_link'][0]['value'] ?? '') }}"
                                class="social-link text-center">
                                    <i class="fa-brands fa-tiktok"></i></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="{{ strip_tags($content['Social_media_Instagram_link'][0]['value'] ?? '') }}"
                                class="social-link text-center">
                                    <i class="fa-brands fa-square-instagram"></i></a>
                        </li>

                        <li class="list-inline-item">
                            <a href="{{ strip_tags($content['Social_media_snapchat_link'][0]['value'] ?? '') }}"
                                class="social-link text-center">
                                    <i class="fa-brands fa-square-snapchat"></i></a>
                        </li>

                        <!-- <li class="list-inline-item">
                            <a href=""
                                class="social-link text-center">
                                <i class="fa-brands fa-x-twitter fs-13"></i></a>

                        </li> -->
                </ul>


            </div>
        </div>
    </div>
</section>

<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 fadeInUp animated mt-3">
                <p class="mt-4">
                {{ strip_tags($content['Footer_paragraph_part1'][0]['value'] ?? '') }}
                <br />
                {{ strip_tags($content['Footer_paragraph_part2'][0]['value'] ?? '') }}
                </p>
            </div>
            <div class="col-12 fadeInUp animated mt-3">
                <a href="" class="btn location">
                <img src="{{asset('front\images\maps.png')}}" class="icon-img">
                {{ __('front.writePreview') }}
                </a>
            </div>
            <div class="col-12 fadeInUp animated mt-3">
                <p class="mt-3"> {{ strip_tags($content['Footer_for_contacts'][0]['value'] ?? '') }}</p>
                <a href="{{'tel:'.strip_tags($content['Number_for_Contacts'][0]['value'] ?? '') }}" class="btn phone">
                    {{ strip_tags($content['Number_for_Contacts'][0]['value'] ?? '') }}
                    <img src="{{asset('front\images\call_back.png')}}" class="icon-img">
                </a>
            </div>
            <div class="col-12 fadeInUp animated mt-3">
                <p class="mt-3 copy-right">{{ __('front.copyWrite') }} . b2_burger 2023</p>
            </div>
            <div class="col-12 fadeInUp animated mt-3">
            <div class="text-right copy-right"> ©
              <script>
                  document.write(new Date().getFullYear())
              </script>
              , made with ❤️ by <a href="https://www.otekit.com" target="_blank"
                  class="text-white text-decoration-none fw-bolder">Otek</a>

            </div>
        </div>
        </div>
    </div>
</section>



 <!-- Modal -->
 <div class="modal fade" id="branchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="">
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="branch-box">
                    <div class="branch-info">
                        <p>{{ strip_tags($content['branch_one'][0]['value'] ?? '') }}</p>
                        <p>{{ strip_tags($content['branch_one_location'][0]['value'] ?? '') }}</p>
                    </div>
                    <div class="branch-info">
                        <p>{{ strip_tags($content['branch_two'][0]['value'] ?? '') }}</p>
                        <p>{{ strip_tags($content['branch_two_location'][0]['value'] ?? '') }}</p>
                    </div>
                    <div class="branch-info">
                        <p>{{ strip_tags($content['branch_three'][0]['value'] ?? '') }}</p>
                        <p>{{ strip_tags($content['branch_three_location'][0]['value'] ?? '') }}</p>
                    </div>
                    <div class="branch-info">
                        <p>{{ strip_tags($content['branch_four'][0]['value'] ?? '') }}</p>
                        <p>{{ strip_tags($content['branch_four_location'][0]['value'] ?? '') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

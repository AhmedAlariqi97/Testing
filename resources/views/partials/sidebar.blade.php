<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

    <a href="{{ route('front.home') }}">
        <div class="app-brand demo text-center">

            <img src="{{ asset('front/images/') }}" alt="logo">


        </div>
        <div class="menu-inner-shadow"></div>

        @php
            function isActiveRoute($Routes = [])
            {
                if (in_array(Request::route()->getName(), $Routes)) {
                    return '  active open ';
                }
                return ' ';
            }
        @endphp

        <ul class="menu-inner py-1">

            {{-- Dashboard --}}


            {{--<li class="menu-item {{ isActiveRoute(['SEOManagement.index']) }}   ">
                <a href="  {{ route('SEOManagement.index') }}" class="menu-link ">
                    <i class='menu-icon tf-icons bx bxs-pen'></i>
                    <div data-i18n="Seo">{{ __('sidebar.seo') }}</div>
                </a>
            </li>--}}
            <li class="menu-item {{ isActiveRoute(['content.index']) }}   ">
                <a href="  {{ route('content.index') }}" class="menu-link ">
                    <i class='menu-icon tf-icons bx bx-text'></i>
                    <div data-i18n="Content Management">{{ __('content.textManagement') }}</div>
                </a>
            </li>

            <li class="menu-item {{ isActiveRoute(['images.index']) }}">
                <a href="{{ route('images.index') }}" class="menu-link">
                    <i class='menu-icon tf-icons bx bx-images'></i>
                    <div data-i18n="Images">{{ __('content.imageManagement') }}</div>
                </a>
            </li>


        </ul>



</aside>
<!-- / Menu -->

<!DOCTYPE HTML>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="light-style layout-navbar-fixed layout-menu-fixed "
    dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" data-theme="theme-semi-dark"
    data-assets-path="{{ asset('/admin/') }}" data-template="vertical-menu-template-semi-dark">


@include('partials.head')
@yield('page-styles')

<body>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">
            @include('partials.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('partials.navbar')

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    {{-- {{ dd($language) }} --}}
                    @yield('content')
                    @include('partials.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->

        </div>


        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    @include('partials.footer_scripts')

    @yield('page-scripts')
</body>
<!-- app-invoice-edit.html , Sat, 26 Mar 2022 16:51:12 GMT -->

</html>

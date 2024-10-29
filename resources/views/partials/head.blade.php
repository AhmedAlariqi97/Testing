<!-- app-invoice-edit.html , Sat, 26 Mar 2022 16:51:12 GMT -->
<!DOCTYPE HTML>

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('front/images/asset-2.svg') }}" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Seo -->
    {{-- {!! SEO::generate() !!} --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/fonts/flag-icons.css') }}" />

    <!-- Yajra Datatable CSS -->

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap5.min.css" rel="stylesheet"> --}}

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/css/rtl/theme-semi-dark.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('admin/css/demo.css') }}" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Page CSS -->

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/tagify/tagify.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/vendor/libs/bootstrap-select/bootstrap-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/css/customDatatable.css') }}" />


    <!-- Helpers -->
    <script src="{{ asset('admin/vendor/js/helpers.js') }}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js') }} in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js') }}.  -->
    <script src="{{ asset('admin/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    {{-- <script src="{{ asset('admin/js/config.js') }}"></script> --}}

    <!-- Global site tag (gtag.js') }}) - Google Analytics -->
    <script async="async" src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'GA_MEASUREMENT_ID');
    </script>
    <!-- Custom notification for demo -->
    <!-- beautify ignore:end -->


</head>

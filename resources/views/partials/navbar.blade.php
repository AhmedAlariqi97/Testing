<!-- Navbar -->
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        {{-- <form action="{{ route('search') }}" method="POST" class='pt-3'>
            <div class="navbar-nav ">
                <div class="nav-item navbar-search-wrapper mb-0  ">
                    <a class="nav-item nav-link search-toggler px-0 " href="javascript:void(0);">
                        @csrf
                        <i class="bx bx-search bx-sm"></i>
                        <input type="text" name="query" class='border-0 pt-2 p-2' style='outline:none'
                            placeholder="Search (Ctrl+/)" />
                    </a>
                </div>
            </div>
        </form> --}}
        <!-- /Search -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Language -->
            <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    @if (App::getLocale() == 'en')
                        <i class='flag-icon flag-icon-us flag-icon-squared rounded-circle fs-3 me-1'></i>
                    @elseif (App::getLocale() == 'ar')
                        <i class='flag-icon flag-icon-sa flag-icon-squared rounded-circle fs-3 me-1'></i>
                    @endif
                </a>
                <ul class="dropdown-menu dropdown-menu-end">

                    @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            @if (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'en')
                                <a class="dropdown-item" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <i class="flag-icon flag-icon-us flag-icon-squared rounded-circle fs-4 me-1"></i>
                                    <span class="align-middle"> {{ $properties['native'] }}</span>
                                </a>
                            @elseif (LaravelLocalization::getCurrentLocale() != $localeCode && $localeCode == 'ar')
                                <a class="dropdown-item" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    <i class="flag-icon flag-icon-ye flag-icon-squared rounded-circle fs-4 me-1"></i>
                                    <span class="align-middle"> {{ $properties['native'] }}</span>
                                </a>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </li>
            <!--/ Language -->

            <!-- Style Switcher -->
            <li class="nav-item me-2 me-xl-0">
                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                    <i class='bx bx-sm'></i>
                </a>
            </li>
            <!--/ Style Switcher -->
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('admin/img/avatars/avater.jpeg') }}" alt
                            class="w-px-40 h-auto rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="javascript:void(0);">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ asset('admin/img/avatars/avater.jpeg') }}" alt
                                            class="w-px-40 h-auto rounded-circle">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ Auth::user()->name }}</span>
                                    <small class="text-muted">
                                        @if (auth()->user()->hasRole('super_admin'))
                                            super Admin
                                        @elseif(auth()->user()->hasRole('admin'))
                                            Admin
                                        @endif
                                    </small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>

                    <li>
                        <a class="dropdown-item" href="auth-login-cover.html" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </a>
                    </li>
                </ul>
            </li>
            <!--/ User -->


        </ul>
    </div>


    <!-- Search Small Screens -->
    <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..."
            aria-label="Search...">
        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
    </div>


</nav>
<!-- / Navbar -->

<nav class="navbar navbar-top fixed-top navbar-expand d-print-none" id="navbarDefault">
    <div class="collapse navbar-collapse justify-content-between">
        <div class="navbar-logo">

            <button class="btn navbar-toggler navbar-toggler-humburger-icon hover-bg-transparent" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
                aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="{{ route('home') }}">
                <div class="d-flex align-items-center">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('backend/assets/img/default/nope.jpg') }}" alt="phoenix" width="27" />
                        <h5 class="logo-text ms-2 d-none d-sm-block">
                            {{ config('app.name') }}
                        </h5>
                    </div>
                </div>
            </a>
        </div>
        <ul class="navbar-nav navbar-nav-icons flex-row">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="languageDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src="{{ asset(__('asset.img.lang')) }}" class="img-fluid mb-1" style="width:15px">
                    {{ __('text-ui.lang.language') }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ route('change.lang', ['lang' => 'en']) }}">
                            <img src="{{ asset('backend/assets/img/lang/usa.png') }}" style="width:15px"
                                class="img-fluid mb-1">
                            <span class="{{ config('app.locale') == 'en' ? 'text-primary' : '' }}">
                                {{ __('text-ui.lang.english') }}</span></a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('change.lang', ['lang' => 'id']) }}"><img
                                src="{{ asset('backend/assets/img/lang/idn.png') }}" style="width:15px"
                                class="img-fluid mb-1"><span
                                class="{{ config('app.locale') == 'id' ? 'text-primary' : '' }}">
                                {{ __('text-ui.lang.indonesia') }}</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <div class="theme-control-toggle fa-icon-wait px-2">
                    <input class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" />
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                        style="height:32px;width:32px;"><span class="icon" data-feather="moon"></span></label>
                    <label class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" data-bs-title="Switch theme"
                        style="height:32px;width:32px;"><span class="icon" data-feather="sun"></span></label>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link lh-1 pe-0" id="navbarDropdownUser" href="#!"
                    role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="avatar avatar-l ">
                        <img class="rounded-circle "
                            src="{{ Auth::user()->picture ? Storage::url(Auth::user()->picture) : asset('backend/assets/img/team/1.webp') }}"
                            alt="" />

                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border"
                    aria-labelledby="navbarDropdownUser">
                    <div class="card position-relative border-0">
                        <div class="card-body p-0">
                            <div class="text-center pt-4 pb-3">
                                <div class="avatar avatar-xl ">
                                    <img class="rounded-circle "
                                        src="{{ Auth::user()->picture ? Storage::url(Auth::user()->picture) : asset('backend/assets/img/team/1.webp') }}"
                                        alt="" />

                                </div>
                                <h6 class="mt-2 text-body-emphasis">{{ Auth::user()->name }}</h6>
                            </div>
                            <div class="mb-3 mx-3">
                                <input class="form-control form-control-sm" id="statusUpdateInput" type="text"
                                    placeholder="Update your status" />
                            </div>
                        </div>
                        <div class="overflow-auto scrollbar" style="height: 10rem;">
                            <ul class="nav d-flex flex-column mb-2 pb-1">
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('profiles.*') ? 'text-primary' : '' }} px-3 d-block"
                                        href="{{ route('profiles.index') }}"> <span
                                            class="me-2 text-body align-bottom"
                                            data-feather="user"></span><span>{{ __('text-ui.navbar.profile') }}</span></a>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('dashboard') ? 'text-primary' : '' }} px-3 d-block"
                                        href="{{ route('dashboard') }}"><span class="me-2 text-body align-bottom"
                                            data-feather="pie-chart"></span>{{ __('text-ui.navbar.dashboard') }}</a>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link {{ request()->routeIs('settings.index') ? 'text-primary' : '' }} px-3 d-block"
                                        href="{{ route('settings.index') }}"><span
                                            class="me-2 text-body align-bottom"
                                            data-feather="settings"></span>{{ __('text-ui.navbar.web-setting') }}</a>
                                </li>


                            </ul>
                        </div>
                        <div class="card-footer p-0">
                            <div class="px-3 mt-2">
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!">
                                        <span class="me-2" data-feather="log-out">
                                        </span>{{ __('text-ui.navbar.logout') }}</button>
                                </form>
                            </div>
                            <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                    class="text-body-quaternary me-1" href="#!">Privacy policy</a>&bull;<a
                                    class="text-body-quaternary mx-1" href="#!">Terms</a>&bull;<a
                                    class="text-body-quaternary ms-1" href="#!">Cookies</a></div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</nav>

<div class="content">
    <nav class="mb-3 d-print-none" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            @if (Breadcrumbs::exists($slot))
                {!! Breadcrumbs::render($slot) !!}
            @endif
        </ol>
    </nav>

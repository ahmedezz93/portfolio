<div>
    <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar">
        <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
            <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="ti ti-menu-2 ti-sm"></i>
            </a>
        </div>

        <div class="navbar-nav-right d-flex align-items-center justify-content-between w-100" id="navbar-collapse">


            <div class="rounded-nav-image" style="background-image: url('{{ $settings->logo_url ?? '' }}');"></div>

            <div class="navbar-nav align-items-center mx-auto">
                <div class="nav-item navbar-search-wrapper mb-0">
                    {{-- <h2 class="text-shadow1">{{ $settings->getTranslation('name', app()->getLocale()) ?? '' }}</h2> --}}
                </div>
            </div>


            <ul class="navbar-nav flex-row align-items-center ">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('settings.lang') }}
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Style Switcher -->
                <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        <i class="ti ti-md"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                <span class="align-middle"><i
                                        class="ti ti-sun me-2"></i>{{ __('settings.light') }}</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                <span class="align-middle"><i
                                        class="ti ti-moon me-2"></i>{{ __('settings.dark') }}</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                <span class="align-middle"><i
                                        class="ti ti-device-desktop me-2"></i>{{ __('settings.system') }}</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                        @if (auth()->guard('web')->check())
                            <div class="avatar avatar-online">
                                <img src="{{ auth()->guard('web')->user()->image_url ?? '' }}" alt=""
                                    class="h-auto rounded-circle" />
                            </div>
                        @endif
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="pages-account-settings-account.html">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0 me-3">
                                        @if (auth()->guard('web')->check())
                                            <div class="avatar avatar-online">
                                                <img src="{{ auth()->guard('web')->user()->image_url ?? '' }}"
                                                    alt="" class="h-auto rounded-circle" />
                                            </div>
                                        @endif
                                    </div>
                                    @if (auth()->guard('web')->check())
                                        <div class="flex-grow-1">
                                            <span
                                                class="fw-medium d-block">{{ auth()->guard('web')->user()->name }}</span>
                                            <small class="text-muted">{{ auth()->guard('web')->user()->email }}</small>
                                        </div>
                                    @endif
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="ti ti-logout me-2 ti-sm"></i>
                                <span class="align-middle">{{ __('settings.logOut') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            </li>
            <!--/ User -->
            </ul>
        </div>
    </nav>
</div>

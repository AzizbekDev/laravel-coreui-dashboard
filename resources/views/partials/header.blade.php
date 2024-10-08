<header class="header header-sticky p-0 mb-4">
    <div class="container-fluid border-bottom px-4">
        <button class="header-toggler" type="button"
            onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()"
            style="margin-inline-start: -14px;">
            <svg class="icon icon-lg">
                <use xlink:href="{{ asset('icons/sprites/free.svg#cil-menu') }}"></use>
            </svg>
        </button>
        <ul class="header-nav d-none d-lg-flex">
            <!-- Implement global search button -->
        </ul>
        <ul class="header-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('icons/sprites/free.svg#cil-bell') }}"></use>
                    </svg>
                </a>
            </li>
        </ul>
        <ul class="header-nav">
            <li class="nav-item py-1">
                <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button"
                    area-expanded="false" data-coreui-toggle="dropdown">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('icons/sprites/free.svg#cil-globe-alt') }}"></use>
                    </svg>&nbsp;{{ strtoupper(App::getLocale()) }}
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                    <li>
                        <button class="dropdown-item d-flex align-items-center {{ App::getLocale() === 'en' ? 'active' : '' }}" type="button"
                            data-coreui-locale-value="en">
                                {{ __('English') }}
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center {{ App::getLocale() === 'ru' ? 'active' : '' }}" type="button"
                            data-coreui-locale-value="ru">
                                {{ __('Russian') }}
                        </button>
                    </li>
                </ul>
            </li>
            <li class="nav-item py-1">
                <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
                <button class="btn btn-link nav-link py-2 px-2 d-flex align-items-center" type="button"
                    aria-expanded="false" data-coreui-toggle="dropdown">
                    <svg class="icon icon-lg theme-icon-active">
                        <use xlink:href="{{ asset('icons/sprites/free.svg#cil-contrast') }}"></use>
                    </svg>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" style="--cui-dropdown-min-width: 8rem;">
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button"
                            data-coreui-theme-value="light">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ asset('icons/sprites/free.svg#cil-sun') }}"></use>
                            </svg>{{ __('Light') }}
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center" type="button"
                            data-coreui-theme-value="dark">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ asset('icons/sprites/free.svg#cil-moon') }}"></use>
                            </svg>{{ __('Dark') }}
                        </button>
                    </li>
                    <li>
                        <button class="dropdown-item d-flex align-items-center active" type="button"
                            data-coreui-theme-value="auto">
                            <svg class="icon icon-lg me-3">
                                <use xlink:href="{{ asset('icons/sprites/free.svg#cil-contrast') }}"></use>
                            </svg>{{ __('Auto') }}
                        </button>
                    </li>
                </ul>
            </li>
            <li class="nav-item py-1">
                <div class="vr h-100 mx-2 text-body text-opacity-75"></div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#"
                    role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img" src="{{ asset('img/avatars/8.jpg') }}" alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <strong>{{ __('Account') }}</strong>
                    </div>

                    <x-dropdown-link href="{{ route('profile.edit') }}" icon="#cil-user">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <x-dropdown-link href="{{ route('profile.settings') }}" icon="#cil-settings">
                        {{ __('Settings') }}
                    </x-dropdown-link>
                
                    <div class="dropdown-divider"></div>
                
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        
                        <x-dropdown-link :href="route('logout')" icon="#cil-account-logout" onclick="event.preventDefault();
                            this.closest('form').submit();">{{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </div>
            </li>
        </ul>
    </div>
    @isset($breadcrumbs)
        <x-breadcrumb :items="$breadcrumbs" />
    @endisset
</header>
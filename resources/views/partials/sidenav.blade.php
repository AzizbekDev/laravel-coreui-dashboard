<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
            <use xlink:href="{{ asset('icons/brands/coreui.svg#full') }}"></use>
          </svg>
          <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
            <use xlink:href="{{ asset('icons/brands/coreui.svg#signet') }}"></use>
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <x-navbar-item href="{{ route('dashboard') }}" icon="#cil-speedometer" 
          active="{{ request()->routeIs('dashboard') }}"
          badge_color="info" badge_info="{{ __('NEW') }}">
          {{ __('Dashboard') }}
        </x-navbar-item>
        
        <x-navbar-title>{{ __('Manage Users') }}</x-navbar-title>

        <x-navbar-item href="/dashboard/users" icon="#cil-people" active="{{ request()->routeIs('users.*') }}">
          {{ __('Users') }}
        </x-navbar-item>
        
        <x-navbar-item href="/dashboard/roles" icon="#cil-lock-unlocked" active="{{ request()->routeIs('roles.*') }}">
          {{ __('Roles') }}
        </x-navbar-item>
        
        <x-navbar-item href="/dashboard/permissions" icon="#cil-shield-alt" active="{{ request()->routeIs('permissions.*') }}">
          {{ __('Permissions') }}
        </x-navbar-item>
        
        <x-navbar-title>{{ __('App Settings') }}</x-navbar-title>

        <x-navbar-item href="/dashboard/settings" icon="#cil-cog" active="{{ request()->routeIs('settings.*') }}">
          {{ __('Settings') }}
        </x-navbar-item>

        <x-navbar-item href="/dashboard/locale" icon="#cil-globe-alt" active="{{ request()->routeIs('locale.*') }}">
          {{ __('Locale') }}
        </x-navbar-item>
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">     
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
</div>

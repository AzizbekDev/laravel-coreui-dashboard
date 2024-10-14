<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <a href="{{ route('dashboard') }}" class="text-white">
            <span class="sidebar-brand-full">
              <img src="{{ asset('images/brand/brand.svg') }}" alt="Logo" width="100" height="40">
            </span>  
          </a>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <x-navbar-item href="{{ route('dashboard') }}" icon="#cil-speedometer" 
          active="{{ request()->routeIs('dashboard') }}"
          badge_color="info" badge_info="{{ __('NEW') }}">
          {{ __('Dashboard') }}
        </x-navbar-item>
        
        @can('view-users')
        <x-navbar-item href="/dashboard/users" icon="#cil-people" active="{{ request()->routeIs('users.*') }}">
          {{ __('Users') }}
        </x-navbar-item>
        @endcan
        
        @can('view-roles')
        <x-navbar-item href="/dashboard/roles" icon="#cil-lock-unlocked" active="{{ request()->routeIs('roles.*') }}">
          {{ __('Roles') }}
        </x-navbar-item>
        @endcan
        
        @can('view-permissions')
        <x-navbar-item href="/dashboard/permissions" icon="#cil-shield-alt" active="{{ request()->routeIs('permissions.*') }}">
          {{ __('Permissions') }}
        </x-navbar-item>
        @endcan
      
        @can('view-settings')
        <x-navbar-item href="/dashboard/settings" icon="#cil-cog" active="{{ request()->routeIs('settings.*') }}">
          {{ __('Settings') }}
        </x-navbar-item>
        @endcan
      
        @can('view-locales')
        <x-navbar-item href="/dashboard/locale" icon="#cil-globe-alt" active="{{ request()->routeIs('locale.*') }}">
          {{ __('Locale') }}
        </x-navbar-item>
        @endcan
      </ul>
      <div class="sidebar-footer border-top d-none d-md-flex">     
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
      </div>
</div>

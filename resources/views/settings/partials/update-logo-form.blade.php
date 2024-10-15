<section>
    <header>
        <h2 class="fs-4">
            {{ __('Update Logo') }}
        </h2>

        <p class="mt-1 fs-6 text-muted">
            {{ __('Update the logo for dashboard.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('settings.update') }}" class="mt-3 mb-3" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="d-flex flex-column flex-md-row justify-content-between gap-5 mb-3">
            <div class="form-group flex-grow-0 flex-md-grow-1">
                <x-input-label for="appLogo" :value="__('Logo')" />
                <x-text-input id="appLogo" name="app_logo" type="file" accept="image/*" class="mt-1" required/>
                <x-input-error :messages="$errors->updateLogo->get('app_logo')" class="mt-2" />
            </div>
            <div class="align-self-end">
                <img src="{{ asset('images/brand/'.$settings['app_logo']) }}" alt="Logo" class="mt-2"
                    style="max-width: 150px;">
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'logo-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600 dark:text-gray-400">{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
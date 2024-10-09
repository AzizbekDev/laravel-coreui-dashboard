<section>
    <header>
        <h2 class="fs-4">
            {{ __('Update Logo and Favicon') }}
        </h2>

        <p class="mt-1 fs-6 text-muted">
            {{ __('Update the logo for dashboard.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('settings.update') }}" class="mt-3 mb-3" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="mb-3">
            <div class="form-group">
                <x-input-label for="logo" :value="__('Logo')" />
                <x-text-input id="logo" name="logo" type="file" class="mt-1"/>
                <x-input-error :messages="$errors->updateLogo->get('logo')" class="mt-2" />
            </div>
            <div class="logo">
                <img src="#" alt="Logo" class="mt-2" style="max-width: 200px;">
            </div>
        </div>

        <div class="mb-3">
            <x-input-label for="favicon" :value="__('Favicon')" />
            <x-text-input id="favicon" name="favicon" type="file" class="mt-1"/>
            <x-input-error :messages="$errors->updateLogo->get('favicon')" class="mt-2" />
        </div>

        <div class="d-flex align-items-center gap-3">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>

<section>
    <header>
        <h2 class="fs-4">
            {{ __('Update Informations') }}
        </h2>
        <p class="mt-1 fs-6 text-muted">
            {{ __('Update the informations for dashboard.') }}
        </p>
    </header>

    <form method="POST" action="{{ route('settings.update') }}" class="mt-3 mb-3">
        @csrf
        @method('patch')
        <div class="mb-3">
            <div class="form-group">
                <x-input-label for="appName" :value="__('App Name')" />
                <x-text-input id="appName" name="app_name" type="text" class="mt-1" value="{{ old('app_name', $settings['app_name'] ?? '') }}"/>
                <x-input-error :messages="$errors->updateAppInfo->get('app_name')" class="mt-2" />
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <x-input-label for="appDescription" :value="__('App Description')" />
                <x-text-input id="appDescription" name="app_description" type="text" class="mt-1" value="{{ old('app_description', $settings['app_description'] ?? '') }}"/>
                <x-input-error :messages="$errors->updateAppInfo->get('app_description')" class="mt-2" />
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <x-input-label for="appUrl" :value="__('App Url')" />
                <x-text-input id="appUrl" name="app_url" type="text" class="mt-1" value="{{ old('app_url', $settings['app_url'] ?? '') }}"/>
                <x-input-error :messages="$errors->updateAppInfo->get('app_url')" class="mt-2" />
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <x-input-label for="appEmail" :value="__('App Email')" />
                <x-text-input id="appEmail" name="app_email" type="email" class="mt-1" value="{{ old('app_email', $settings['app_email'] ?? '') }}"/>
                <x-input-error :messages="$errors->updateAppInfo->get('app_email')" class="mt-2" />
            </div>
        </div>

        <div class="mb-3">
            <div class="form-group">
                <x-input-label for="appPhone" :value="__('App Phone')" />
                <x-text-input id="appPhone" name="app_phone" type="text" class="mt-1" value="{{ old('app_phone', $settings['app_phone'] ?? '') }}"/>
                <x-input-error :messages="$errors->updateAppInfo->get('app_phone')" class="mt-2" />
            </div>
        </div>

        <div class="d-flex align-items-center gap-3">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'app-info-updated')
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

<section class="space-y-6">
    <header>
        <h2 class="fs-4">
            {{ __('Delete Account') }}
        </h2>

        <p class="mt-1 fs-6 text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <x-danger-button data-coreui-toggle="modal" data-coreui-target="#confirmUserDeletionModal">
    {{ __('Delete Account') }}
    </x-danger-button>

    <x-modal name="confirmUserDeletionModal" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
            @csrf
            @method('delete')
            <h2 class="fs-4">
                {{ __('Are you sure you want to delete your account?') }}
            </h2>
            <p class="mt-1 fs-6 text-muted">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-3">
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                <x-text-input id="password" name="password" type="password" class="mt-1"
                    placeholder="{{ __('Password') }}" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            <div class="mt-3 d-flex justify-content-end">
                <x-secondary-button data-coreui-dismiss="modal">
                    {{ __('Cancel') }}
                </x-secondary-button>

                <x-danger-button class="ms-3">
                    {{ __('Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
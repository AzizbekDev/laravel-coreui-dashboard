<x-app-layout :breadcrumbs="[
    ['label' =>__('Dashboard'), 'href' => route('dashboard')],
    ['label' =>__('Users'), 'href' => route('users.index')],
    ['label' => $pageTitle]
]">
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('Create New User') }}</h5>
                            <form method="POST" action="{{ route('users.store') }}" class="mt-3 mb-3">
                                @csrf
                                <div class="mb-3">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1"
                                        :value="old('name')" required autocomplete="name" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>
                                <div class="mb-3">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" name="email" type="email" class="mt-1"
                                        :value="old('email')" required autocomplete="email" />
                                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                                </div>
                                <div class="mb-3">
                                    <x-input-label for="password" :value="__('Password')" />
                                    <x-text-input id="password" name="password" type="password" class="mt-1" autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                                <div class="mb-3">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                    <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1" autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>
                                <div class="d-flex justify-content-between">
                                    <x-button-link :href="route('users.index')" color="outline-secondary" class="fw-bold">
                                        {{ __('Back') }}
                                    </x-button-link>
                                    <x-primary-button>{{ __('Save') }}</x-primary-button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
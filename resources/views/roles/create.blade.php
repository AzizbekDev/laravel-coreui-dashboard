<x-app-layout :breadcrumbs="[
    ['label' => __('Dashboard'), 'href' => route('dashboard')],
    ['label' => __('Roles'), 'href' => route('roles.index')],
    ['label' => __($pageTitle)]
]">
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('Create New Role') }}</h5>
                            <form method="POST" action="{{ route('roles.store') }}" class="mt-3 mb-3">
                                @csrf
                                <div class="mb-3">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" name="name" type="text" class="mt-1" :value="old('name')"
                                        required autocomplete="name" />
                                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                </div>
                                <div class="mb-3">
                                    <x-input-label for="description" :value="__('Description')" />
                                    <x-text-input id="description" name="description" type="text" class="mt-1"
                                        :value="old('description')" required autocomplete="description" />
                                    <x-input-error class="mt-2" :messages="$errors->get('description')" />
                                </div>
                                <div class="mb-3">
                                    <x-input-label for="permissions" :value="__('Permissions')" />
                                    <x-input-select id="permissions" name="permissions[]" :options="$permissions" class="mt-1" multiple required></x-input-select>
                                    <x-input-error class="mt-2" :messages="$errors->get('permissions')" />
                                </div>
                                <div class="d-flex justify-content-between">
                                    <x-button-link :href="route('roles.index')" color="outline-secondary"
                                        class="fw-bold">
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
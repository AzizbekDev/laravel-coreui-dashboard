<x-app-layout :breadcrumbs="[
        ['label' => __('Dashboard'), 'href' => route('dashboard')],
        ['label' => $pageTitle]
    ]">
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="h2">{{ $pageTitle }}</h1>
                </div>
                <div class="col-12 px-3 pb-3">
                    <div class="p-4 shadow rounded">
                        <div class="w-100">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                </div>
                <div class="col-12 px-3 pb-3">
                    <div class="p-4 shadow rounded">
                        <div class="w-100">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                </div>

                <div class="col-12 px-3 pb-3">
                    <div class="p-4 shadow rounded">
                        <div class="w-100">
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
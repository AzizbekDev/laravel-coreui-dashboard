<x-app-layout :breadcrumbs="[
    ['label' => $pageTitle]
]">
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="h2">{{ $pageTitle }}</h1>
                    <p class="lead">
                        {{ __('Welcome to your dashboard!') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-app-layout :breadcrumbs="[
    ['label' => __('Dashboard'), 'href' => route('dashboard')],
    ['label' => __($pageTitle)]
]">
    <div class="body flex-grow-1">
        <div class="container-lg px-4">
            <div class="row">
                <div class="col-12">
                    <h1 class="h2">{{ __($pageTitle) }}</h1>
                </div>
                <div class="col-12 px-3 pb-3">
                    <div class="p-4 shadow rounded">
                        <div class="w-100">
                            @include('settings.partials.update-logo-form')
                        </div>
                    </div>
                </div>
                <div class="col-12 px-3 pb-3">
                    <div class="p-4 shadow rounded">
                        <div class="w-100">
                            
                        </div>
                    </div>
                </div>

                <div class="col-12 px-3 pb-3">
                    <div class="p-4 shadow rounded">
                        <div class="w-100">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
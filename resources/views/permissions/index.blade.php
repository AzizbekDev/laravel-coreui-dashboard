<x-app-layout :breadcrumbs="[
    ['label' => __('Dashboard'), 'href' => route('dashboard')],
    ['label' => $pageTitle]
]">
<div class="body flex-grow-1">
    <div class="container-lg px-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between mb-2">
                    <h1 class="h2">{{ $pageTitle }}</h1>
                    <div>
                        <x-button-link :href="route('permissions.create')" color="primary" class="text-white fw-bold">
                            {{ __('Create') }}
                        </x-button-link>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('No') }}</th>
                                <th scope="col">{{ __('Name') }}</th>
                                <th scope="col">{{ __('Description') }}</th>
                                <th scope="col" width="280px">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->description }}</td>
                                <td>
                                    <x-button-link :href="route('permissions.edit', $permission->id)" class="fw-bold text-white" color="info">
                                        {{ __('Edit') }}
                                    </x-button-link>

                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST"
                                        style="display:inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
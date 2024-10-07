<x-app-layout :breadcrumbs="[
    ['label' =>__('Dashboard'), 'href' => route('dashboard')],
    ['label' => $pageTitle]
]">
<div class="body flex-grow-1">
    <div class="container-lg px-4">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between mb-2">
                    <h1 class="h2">{{ $pageTitle }}</h1>
                    <div>
                        <x-button-link :href="route('users.create')" color="primary" class="text-white fw-bold">
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
                                <th scope="col">{{ __('Email') }}</th>
                                <th scope="col">{{ __('Created At') }}</th>
                                <th scope="col" width="280px">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->formatted_created_at }}</td>
                                <td>
                                    <x-button-link :href="route('users.edit', $user->id)" class="fw-bold text-white" color="info">
                                        {{ __('Edit') }}
                                    </x-button-link>

                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
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
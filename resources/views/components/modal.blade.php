@props([
    'name',
    'show' => false,
    'maxWidth' => 'lg'
])

@php
$maxWidth = [
    'sm'  => 'modal-sm',
    'md'  => 'modal-md',
    'lg'  => 'modal-lg',
    'xl'  => 'modal-xl',
    '2xl' => 'modal-xxl',
][$maxWidth];
@endphp

<div 
    class="modal fade {{ $show ? 'show' : '' }}" 
    id="{{ $name }}" 
    tabindex="-1" 
    aria-labelledby="modalLabel" 
    aria-hidden="{{ $show ? 'false' : 'true' }}" 
    style="display: {{ $show ? 'block' : 'none' }};"
    role="dialog"
>
    <div class="modal-dialog {{ $maxWidth }} modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">{{ $title ?? 'Modal' }}</h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                {{ $footer ?? '' }}
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modalElement = document.getElementById('{{ $name }}');
        var modal = new coreui.Modal(modalElement, {
            backdrop: 'static',
            keyboard: false
        });

        if ({{ $show ? 'true' : 'false' }}) {
            modal.show();
        }

        window.addEventListener('open-modal', function (event) {
            if (event.detail === '{{ $name }}') {
                modal.show();
            }
        });

        window.addEventListener('close-modal', function (event) {
            if (event.detail === '{{ $name }}') {
                modal.hide();
            }
        });
    });
</script>
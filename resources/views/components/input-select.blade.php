@props([
'id',
'name',
'options' => [],
'class' => '',
'selected' => [],
'multiple' => false,
'required' => false,
])
@push('styles')
<style>
.selected-options span span {
    cursor: pointer;
}
</style>
@endpush
<div class="select-wrapper">
    <select id="{{ $id }}" name="{{ $name }}" class="form-control border-secondary rounded {{ $class }}"
        {{ $multiple ? 'multiple' : '' }} {{ $required ? 'required' : '' }} data-target="{{ $id }}">
        @foreach ($options as $value => $label)
            <option value="{{ $value }}" {{ in_array($value, $selected) ? 'selected' : '' }}>{{ $label }}</option>
        @endforeach
    </select>

    <div class="mt-2 selected-options" id="selected-options-{{ $id }}"></div>

    @if($multiple)
        <div>
            <button type="button" class="btn btn-link btn-sm select-all-btn" data-target="{{ $id }}">
                {{ __('Select All') }}
            </button>
            <button type="button" class="btn btn-link btn-sm reset-btn" data-target="{{ $id }}">
                {{ __('Reset') }}
            </button>
        </div>
    @endif
</div>
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const selectElement = document.getElementById('{{ $id }}');
    
    updateSelectedOptions(selectElement);

    selectElement.addEventListener('change', function () {
        updateSelectedOptions(selectElement);
    });

    const selectAllBtn = document.querySelector(`.select-all-btn[data-target="{{ $id }}"]`);
    selectAllBtn?.addEventListener('click', function () {
        Array.from(selectElement.options).forEach(option => option.selected = true);
        updateSelectedOptions(selectElement);
    });

    const resetBtn = document.querySelector(`.reset-btn[data-target="{{ $id }}"]`);
    resetBtn?.addEventListener('click', function () {
        Array.from(selectElement.options).forEach(option => option.selected = false);
        updateSelectedOptions(selectElement);
    });

    function updateSelectedOptions(selectElement) {
        const selectedOptionsContainer = document.getElementById(`selected-options-${selectElement.id}`);
        selectedOptionsContainer.innerHTML = '';
        Array.from(selectElement.selectedOptions).forEach(option => {
            const badge = document.createElement('span');
            badge.className = 'badge bg-primary me-1';
            badge.textContent = option.text;

            const closeButton = document.createElement('span');
            closeButton.className = 'ms-2 text-light';
            closeButton.innerHTML = '&times;';
            closeButton.addEventListener('click', function () {
                option.selected = false;
                updateSelectedOptions(selectElement);
            });

            badge.appendChild(closeButton);
            selectedOptionsContainer.appendChild(badge);
        });
    }
});
</script>
@endpush
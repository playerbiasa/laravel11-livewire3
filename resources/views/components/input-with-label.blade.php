<div class="col-md-12">
    <label for="{{ $name }}" id="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" class="form-control @error('{{ $name }}') is-invalid @enderror" id="{{ $name }}" name="{{ $name }}" autocomplete="off" wire:model='{{ $model }}'>
    <x-error-message name="{{ $name }}" />
</div>

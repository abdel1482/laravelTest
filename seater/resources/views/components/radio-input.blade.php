@props(['checked'])

<input {{ $checked ? 'checked' : '' }} {!! $attributes->merge(['class' => 'form-check-input']) !!}>

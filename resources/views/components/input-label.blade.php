@props(['value'])

<x-jui::label {{ $attributes }}>
    {{ $value ?? $slot }}
</x-jui::label>

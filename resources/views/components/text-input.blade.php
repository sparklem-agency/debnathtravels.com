@props(['disabled' => false])

<x-jui::input {{ $attributes->merge(['disabled' => $disabled]) }} />

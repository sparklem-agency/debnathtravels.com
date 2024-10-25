@props(['color' => 'white'])
<a
    {{ $attributes->merge([
        'class' => 'w-fit rounded-md px-2 block',
        'href' => url('/'),
        'x-navigate' => true,
    ]) }}>
    <span class="font-fredoka -mb-3 block text-lg font-medium text-[var(--primary)]">Debnath</span>
    <span class="font-inter text-[10px] font-medium uppercase tracking-widest"
        style="color:{{ $color }}">Travels</span>
</a>

@props(['car'])

<div {{ $attributes->merge([
    'class' => 'relative',
]) }}>
    <div class="absolute left-2 top-2 z-10 w-fit rounded-full bg-[#1B202E] p-3 text-xs uppercase text-[#FFD700]">
        vip car</div>
    <div class="relative overflow-hidden rounded-2xl bg-slate-100">
        <img class="size-32" src="{{ $car->getFirstMediaUrl('photo') }}" alt="">
    </div>
    <div class="relative z-10 -mt-5 rounded-2xl bg-[#1B202E] p-4 text-white">
        <h2 class="text-xl font-bold">{{ $car->name }}</h2>
        @php
            $Parsedown = new Parsedown();
        @endphp
        <p class="porse">{!! $Parsedown->text($car->description) !!}</p>
        <div class="mt-3 w-fit rounded-full bg-white p-2 text-center text-xs font-medium uppercase text-black">
            {{ $car->seats }} seaters</div>
    </div>
</div>

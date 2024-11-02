@props(['title', 'description'])
<div {{ $attributes->merge(['class' => 'p-3']) }}>
    <div class='grid grid-cols-1 gap-3 lg:grid-cols-2'>
        <div class="lg:max-w-md">
            <h2 class="text-5xl font-bold capitalize">{{ $title }}</h2>
        </div>
        <div>
            <a class="block w-fit rounded-full bg-blue-800 p-3 px-5 text-white"
                href="//wa.me/{{ env('WHATSAPP_NUMBER') }}">Book Your Tour Now</a>
            @if (isset($description) || isset($slot))
                <p class="mt-5">{{ $description ?? $slot }}</p>
            @endisset
    </div>
</div>

<div class="relative mx-auto mt-8 max-w-xs">
    <div class="border-b border-blue-700"></div>
    <div class="size-5 absolute inset-0 mx-auto -mt-3 rounded-full bg-blue-700"></div>
</div>
</div>

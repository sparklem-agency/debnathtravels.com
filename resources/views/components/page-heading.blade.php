@props(['heading' => null])
<div {{ $attributes }}>
    <div class="min-h-72 grid place-items-center bg-[#545575] p-5 text-white">
        <h2 class="mt-10 text-4xl font-bold">{{ $heading ?? $slot }}</h2>
    </div>
</div>

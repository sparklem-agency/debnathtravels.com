@props(['heading' => null])
<div {{ $attributes->merge([
    'data-aos' => 'fade-up',
]) }}>
    <div class="min-h-72 relative grid place-items-center bg-cover p-5 text-white"
        style="background-image: url('{{ asset('/assets/hero-bg.png') }}')">
        <h2 class="mt-10 text-4xl font-bold">{{ $heading ?? $slot }}</h2>

        <div class="absolute -bottom-4 mx-auto flex items-center gap-1 rounded-md bg-[var(--primary)] p-2 text-xs">
            <a class="block" href="{{ url('/') }}">Home</a>
            <svg class="size-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path
                    d="M12.1717 12.0005L9.34326 9.17203L10.7575 7.75781L15.0001 12.0005L10.7575 16.2431L9.34326 14.8289L12.1717 12.0005Z">
                </path>
            </svg>
            <a class="block whitespace-nowrap max-w-3xl mx-auto">{{ $heading ?? $slot }}</a>

        </div>
    </div>
</div>

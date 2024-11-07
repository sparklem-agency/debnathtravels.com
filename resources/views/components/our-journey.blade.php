<div {{ $attributes->merge([
    'data-aos' => 'fade-up',
]) }}>
    <div class="bg-ptrn-2 rounded-2xl bg-[#D7EBFF] p-5 py-16">
        <x-heading class="mt-8" title="Gallery">
            Our journey in pictures
        </x-heading>
        <div class="mt-10 grid grid-cols-2 gap-4 lg:grid-cols-4">
            <div class="overflow-hidden rounded-2xl even:mt-8">
                <img src="{{ url('assets/our-hotels-1.png') }}" alt="">
            </div>
            <div class="overflow-hidden rounded-2xl even:mt-8">
                <img src="{{ url('assets/our-hotels-2.png') }}" alt="">
            </div>
            <div class="overflow-hidden rounded-2xl even:mt-8">
                <img src="{{ url('assets/our-hotels-3.png') }}" alt="">
            </div>
            <div class="overflow-hidden rounded-2xl even:mt-8">
                <img src="{{ url('assets/our-hotels-4.png') }}" alt="">
            </div>
        </div>

        <center>
            <a class="primary-button mt-10" href="{{ route('gallery') }}">
                View all

                <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                    </path>
                </svg>
            </a>
        </center>

    </div>

</div>

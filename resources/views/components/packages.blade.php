<div class="rounded-2xl bg-gray-200 p-5 py-16">
    <x-heading class="mt-8" title="Top Places At Unbeatable prices">
        Explore the best of Northeast India with our expertly curated
        tour packages. Let us guide you to breathtaking landscapes, rich cultures, and unforgettable experiences in this
        enchanting region.
    </x-heading>

    <div class="grid grid-cols-1 gap-10 p-2 lg:grid-cols-4 lg:p-5">
        @foreach (range(1, 8) as $item)
            <div class="relative overflow-hidden rounded-2xl">
                <img src="{{ url('assets/assam.png') }}" alt="">
                <div class="absolute bottom-0 left-0 right-0 z-20 w-full bg-[rgba(255,255,255,0.8)]">
                    <div class="p-4">
                        <div>
                            <div class="flex flex-wrap gap-4">
                                <div>
                                    <h2 class="font-extrabold">Assam</h2>
                                    <p>Starting at <b>555</b> rupees</p>
                                </div>

                                <a class="ml-auto" href="http://">
                                    <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 11H8V13H12V16L16 12L12 8V11Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <div class="mt-5 flex flex-wrap gap-1 text-xs">
                                <span class="rounded-full bg-white px-2">5D/6N</span>
                                <span class="rounded-full bg-white px-2">30 places to visit</span>
                                <span class="rounded-full bg-white px-2">6 activities</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>

</div>

<x-app-layout title="About Us">
    <x-page-heading>
        About Us
    </x-page-heading>
    <div class="p-5 py-10">
        <x-heading>
            <x-slot name="title">
                About <span class="text-blue-600">Debnath Travels</span>
            </x-slot>
            <div class="max-w-xl mx-auto">
                Explore the best of Northeast India with our expertly curated tour packages. Let us guide you to
                breathtaking landscapes, rich cultures, and unforgettable experiences in this enchanting region.
            </div>
        </x-heading>

        <br>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-2 max-w-2xl mx-auto">
            <div>
                <div class="overflow-hidden rounded-md size-80 border-4 p-16 bg-black">
                    <img src="{{ asset('assets/owner-image.jpg') }}" class="ml-auto" alt="">
                </div>
            </div>
            <div class="mx-auto max-w-md italic">
                <b>Debnath Tours is your gateway to unforgettable travel experiences. Established with a passion for
                    exploration
                    and a commitment to excellence, we are a leading travel agency dedicated to crafting personalized
                    and
                    unique
                    journeys for every traveler. Whether you're seeking serene landscapes, cultural adventures, or
                    thrilling
                    expeditions, Debnath Tours is here to make your travel dreams a reality.

                    With years of expertise in the travel industry, our team of experienced travel professionals ensures
                    that
                    every detail of your trip is meticulously planned and executed. From selecting the perfect
                    destination
                    to
                    arranging comfortable accommodations, local guides, and immersive experiences, we handle everything,
                    so
                    you
                    can focus on creating memories that last a lifetime.
                </b>
            </div>
        </div>

        <div class="mt-10">
            <x-packages />
        </div>

        <div class="mt-10">
            <x-car-collection />
        </div>

        <div class="mt-10">
            <x-why-choose-us />
        </div>

        <x-cta />
    </div>
</x-app-layout>

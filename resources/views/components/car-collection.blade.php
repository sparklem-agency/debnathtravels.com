<div {{ $attributes }}>
    <div class="bg-ptrn-1 rounded-3xl bg-[#FBE0E0] p-5 py-16">
        <x-heading title="The Best Car Collection">
            Explore the best of Northeast India with our expertly curated tour packages. Let us guide you to
            breathtaking
            landscapes, rich cultures, and unforgettable experiences in this enchanting region.
        </x-heading>

        <div class="relative mt-5 grid grid-cols-1 gap-5 lg:grid-cols-3">
            @foreach (range(1, 3) as $item)
                <div class="relative">
                    <div
                        class="absolute left-2 top-2 z-10 w-fit rounded-full bg-[#1B202E] p-3 text-xs uppercase text-[#FFD700]">
                        vip car</div>
                    <div class="relative overflow-hidden rounded-2xl bg-slate-100">
                        <img src="{{ url('/assets/innova-crysta-car.png') }}" alt="">
                    </div>
                    <div class="relative z-10 -mt-5 rounded-2xl bg-[#1B202E] p-4 text-white">
                        <h2 class="text-xl font-bold">Innova Crysta</h2>
                        <p>Starting From <b>500 rs</b> per person</p>
                        <div class="mt-3 w-fit rounded-full bg-white p-2 text-center text-black">6 Seaters</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

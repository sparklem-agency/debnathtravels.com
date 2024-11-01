@props(['item', 'editable'])

<div class="relative overflow-hidden rounded-2xl">
    <img src="{{ $item->getFirstMediaUrl('thumbnail') }}" alt="">
    <div class="absolute bottom-0 left-0 right-0 z-20 w-full bg-[rgba(255,255,255,0.8)]">
        <div class="p-4">
            <div>
                <div class="flex flex-wrap gap-4">
                    <div>
                        <h2 class="font-extrabold">{{ $item->name }}</h2>
                        <p>Starting at <b>{{ $item->price }}</b> rupees</p>
                    </div>

                    <a class="ml-auto" href="{{ $editable ? route('admin.packages.edit', $item->id) : '' }}">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 11H8V13H12V16L16 12L12 8V11Z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="mt-5 flex flex-wrap gap-1 text-xs">
                    @foreach ($item->tags as $tag)
                        <span class="rounded-full bg-white px-2">{{ $tag }}</span>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>

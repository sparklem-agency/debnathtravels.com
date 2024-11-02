@props(['review'])

<div class="rounded-md bg-white p-5 shadow-md">
    <div class="flex gap-3">
        <div class="size-10 overflow-hidden rounded-full border-2">
            <img class="size-10 object-cover" src="{{ $review->getFirstMediaUrl('avatar') }}" alt="">
        </div>
        <div>
            <h2 class="font-bold">{{ $review->username }}</h2>
            <div class="flex items-center gap-1">
                @php
                    $i = 0;
                @endphp
                @foreach (range(1, 5) as $star)
                    @php
                        $i++;
                    @endphp
                    <svg @class([
                        'size-4',
                        'text-yellow-600' => $i <= $review->stars,
                        'text-gray-100' => $i > $review->stars,
                    ]) xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        fill="currentColor">
                        <path
                            d="M23.9996 12.0235C17.5625 12.4117 12.4114 17.563 12.0232 24H11.9762C11.588 17.563 6.4369 12.4117 0 12.0235V11.9765C6.4369 11.5883 11.588 6.43719 11.9762 0H12.0232C12.4114 6.43719 17.5625 11.5883 23.9996 11.9765V12.0235Z">
                        </path>
                    </svg>
                @endforeach
            </div>

        </div>
    </div>

    <div class="p-3">
        {{ $review->body }}
    </div>
</div>

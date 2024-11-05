@props(['title', 'description' => null])
<div>
    <h2 class="text-center text-3xl font-bold capitalize lg:text-4xl">{{ $title }}</h2>

    <div class="mt-5 text-center">
        <p>{{ $description ?? $slot }}</p>
    </div>
</div>

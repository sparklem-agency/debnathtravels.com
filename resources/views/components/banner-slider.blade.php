<swiper-container class="mx-auto w-full" {{ $attributes }} slides-per-view="1" autoplay="true" speed="500"
    loop="true">
    <swiper-slide class="w-full">
        <img src="{{ url('assets/banners/carrental.jpg') }}?{{ env('APP_VERSION') }}" class="w-full" alt="">
    </swiper-slide>
    <swiper-slide class="w-full">
        <img src="{{ url('assets/banners/packages.jpg') }}?{{ env('APP_VERSION') }}" class="w-full" alt="">
    </swiper-slide>
</swiper-container>

<?php

use App\Models\Review;
$reviews = Review::paginate();
?>

<div class="rounded-2xl bg-gray-50 p-5 py-16" data-aos="fade-up">

    <x-heading title="Rating & Reviews">
        Here's what our clients are saying:
        They trust us for quality,
        choose us for reliability,
        and recommend us with confidence
    </x-heading>
    <div class="mt-5">
        @if (!count($reviews))
            <center><i>Reviews are being updated</i></center>
        @endif
        <swiper-container class="hidden space-x-5 md:block" slides-per-view="3" autoplay="true" speed="500" loop="true"
            css-mode="true">
            @foreach ($reviews as $review)
                <swiper-slide>
                    <x-review-card :$review />
                </swiper-slide>
            @endforeach
        </swiper-container>

        <swiper-container class="space-x-5 md:hidden" slides-per-view="1" autoplay="true" speed="500" loop="true"
            css-mode="true">
            @foreach ($reviews as $review)
                <swiper-slide>
                    <x-review-card :$review />
                </swiper-slide>
            @endforeach
        </swiper-container>
    </div>

    <a class="primary-button mx-auto mt-5"
        href="https://www.google.com/search?q=DEBNATH+TOUR+AND+TRAVELS+(AGENCY)&rlz=1C1ONGR_enIN1024IN1024&oq=DEBNATH+TOUR+AND+TRAVELS+(AGENCY)&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIGCAEQRRg7MgYIAhBFGDwyBggDEEUYPTIGCAQQRRg80gEHNjU2ajBqNKgCALACAQ&sourceid=chrome&ie=UTF-8#lrd=0x37507f40e219c267:0xe973f013abd8691f,1,,,,">View
        All Reviews</a>
</div>

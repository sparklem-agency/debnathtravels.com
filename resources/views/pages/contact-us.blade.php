<?php
use App\Models\Blog;
use function Laravel\Folio\{name};

name('contact');

?>
<x-app-layout title=" Contact Us">
    <x-page-heading>
        Contact Us
    </x-page-heading>
    <div class="bg-ptrn-2 p-5 py-10">
        <div class="mx-auto max-w-xs p-3 text-center lg:max-w-md">
            Enjoy comfortable and safe rides, eco-friendly practices, and affordable prices, with 24/7 support.
            Discover hidden gems and diverse destinations across Northeast India with a reliable travel partner.
        </div>

        <br>
        <div data-aos="fade-up">

            <div class="items-center justify-center gap-5 space-y-5 lg:mx-auto lg:grid lg:max-w-2xl lg:grid-cols-2">
                <div>
                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 20.8995L16.9497 15.9497C19.6834 13.2161 19.6834 8.78392 16.9497 6.05025C14.2161 3.31658 9.78392 3.31658 7.05025 6.05025C4.31658 8.78392 4.31658 13.2161 7.05025 15.9497L12 20.8995ZM12 23.7279L5.63604 17.364C2.12132 13.8492 2.12132 8.15076 5.63604 4.63604C9.15076 1.12132 14.8492 1.12132 18.364 4.63604C21.8787 8.15076 21.8787 13.8492 18.364 17.364L12 23.7279ZM12 13C13.1046 13 14 12.1046 14 11C14 9.89543 13.1046 9 12 9C10.8954 9 10 9.89543 10 11C10 12.1046 10.8954 13 12 13ZM12 15C9.79086 15 8 13.2091 8 11C8 8.79086 9.79086 7 12 7C14.2091 7 16 8.79086 16 11C16 13.2091 14.2091 15 12 15Z">
                        </path>
                    </svg>
                    <div>
                        <strong>Office</strong>
                        <div>
                            Nongkynrih, Laitumkhrah, Shillong, Meghalaya
                        </div>
                    </div>
                </div>

                <div>
                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM9.71002 19.6674C8.74743 17.6259 8.15732 15.3742 8.02731 13H4.06189C4.458 16.1765 6.71639 18.7747 9.71002 19.6674ZM10.0307 13C10.1811 15.4388 10.8778 17.7297 12 19.752C13.1222 17.7297 13.8189 15.4388 13.9693 13H10.0307ZM19.9381 13H15.9727C15.8427 15.3742 15.2526 17.6259 14.29 19.6674C17.2836 18.7747 19.542 16.1765 19.9381 13ZM4.06189 11H8.02731C8.15732 8.62577 8.74743 6.37407 9.71002 4.33256C6.71639 5.22533 4.458 7.8235 4.06189 11ZM10.0307 11H13.9693C13.8189 8.56122 13.1222 6.27025 12 4.24799C10.8778 6.27025 10.1811 8.56122 10.0307 11ZM14.29 4.33256C15.2526 6.37407 15.8427 8.62577 15.9727 11H19.9381C19.542 7.8235 17.2836 5.22533 14.29 4.33256Z">
                        </path>
                    </svg>
                    <div>
                        <strong>Website</strong>
                        <div>
                            <a href="https://debnathtravels.com/">https://debnathtravels.com</a>
                        </div>
                    </div>
                </div>

                <div>
                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M3 3H21C21.5523 3 22 3.44772 22 4V20C22 20.5523 21.5523 21 21 21H3C2.44772 21 2 20.5523 2 20V4C2 3.44772 2.44772 3 3 3ZM20 7.23792L12.0718 14.338L4 7.21594V19H20V7.23792ZM4.51146 5L12.0619 11.662L19.501 5H4.51146Z">
                        </path>
                    </svg>
                    <div>
                        <strong>Email</strong>
                        <div>
                            <a href="mailto:pinkudebnath79@gmail.com">pinkudebnath79@gmail.com</a>
                        </div>
                    </div>
                </div>

                <div>
                    <svg class="size-10" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z">
                        </path>
                    </svg>
                    <div>
                        <strong>Phone</strong>
                        <div>
                            <a href="tel:{{ env('PHONE_NUMBER') }}">{{ env('PHONE_NUMBER') }}</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <iframe class="mt-10 h-72 w-full"
            src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d115169.06563544556!2d91.81537408005836!3d25.57055882962167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x37507f40e219c267%3A0xe973f013abd8691f!2sNongkynrih%2C%20Laitumkhrah%2C%20Shillong%2C%20Meghalaya%20793003!3m2!1d25.5705819!2d91.8977756!5e0!3m2!1sen!2sin!4v1730963144124!5m2!1sen!2sin"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

        <div class="mt-10">
            <x-why-choose-us />
        </div>

        <div class="mx-auto mt-10 max-w-xs">
            <x-cta />
        </div>
    </div>
</x-app-layout>

@props(['title'])
<div class="bg-ptrn-2 rounded-2xl bg-blue-50 p-3 py-16" data-aos="fade-up">

    <x-heading title='how to book'>
        Get ready for an unforgettable adventure with a custom-tailored tour package designed just for you!
    </x-heading>

    <div class="mt-10">

        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2">

            <div class="grid grid-cols-2 gap-2 rounded-md bg-slate-50 p-3">
                <div class="space-y-3 p-3 lg:space-y-9">
                    <h2 class="text-xl font-bold">Steps to Book</h2>

                    <div class="text-xs lg:text-base">
                        <li>Send us contact details</li>
                        <li>Confirm your identity</li>
                        <li> Have to pay in advance</li>
                        <li>Have to obey all of our T&C</li>
                    </div>
                </div>
                <div>
                    <img src="{{ url('/assets/caller.jpeg') }}" alt="">
                </div>
            </div>

            <div class="grid grid-cols-1 gap-5 rounded-md bg-gray-800 p-3 p-3 text-white lg:grid-cols-2">

                <div class="space-y-3">
                    <h2 class="text-xl font-bold"> Bank
                        details</h2>

                    <div>
                        <b>Bank Name :</b> Central Bank of India
                    </div>

                    <div><b>Account Number :</b> 5697528021</div>

                    <div><b>IFSC :</b> CBIN0282712</div>

                </div>

                <div>
                    <strong>UPI details</strong>

                    <div>
                        12121775@cbin
                    </div>

                    <div>
                        <img class="mt-5 rounded-lg p-3" src="{{ url('/assets/qr.jpg') }}" srcset=""
                            alt="">
                    </div>

                </div>

            </div>
        </div>
        <div></div>
    </div>

</div>

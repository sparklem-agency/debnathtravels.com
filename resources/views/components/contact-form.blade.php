@props(['text' => null])
<form
    class="mx-auto flex flex-col gap-5 rounded-xl bg-blue-700 px-4 py-4 !text-white shadow-2xl lg:max-w-fit lg:flex-row lg:gap-2 lg:py-4"
    x-data="{
        name: null,
        phoneNumber: null,
        date: null,
        handleSubmit(e) {
            e.preventDefault();
    
            window.location.href = '//wa.me/{{ env('WHATSAPP_NUMBER') }}?text=' + `*Booking request* :  *name* :${this.name},*phone number* :${this.phoneNumber},*Date* :${this.date} : 
                                    {{ $text }}`;
        }
    }" @submit.prevent="handleSubmit">
    <h2 class="text-center text-xl lg:hidden">Book You Trip</h2>
    <div class="space-y-2">
        <x-input-label value="Name" />
        <x-text-input class="w-full p-3 !text-black" x-model="name" required placeholder="Name" />
    </div>
    <div class="space-y-2">
        <x-input-label value="Phone Number" />
        <x-text-input class="w-full p-3 !text-black" type="tel" x-model="phoneNumber" required
            placeholder="Phone Number" />
    </div>
    <div class="space-y-2">
        <x-input-label value="Choose Date" />
        <x-text-input class="w-full p-3 !text-black" type="date" x-model="date" required placeholder="Trip Date" />

    </div>

    <div>
        <center>
            <x-primary-button class="mx-auto h-12 justify-center rounded-3xl p-5 lg:mt-[30px]" type="submit"
                @submit="handleSubmit">
                <div class="flex gap-2">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM11.0026 16L6.75999 11.7574L8.17421 10.3431L11.0026 13.1716L16.6595 7.51472L18.0737 8.92893L11.0026 16Z">
                        </path>
                    </svg>

                    <span>Book</span>
                </div>
            </x-primary-button>
        </center>

    </div>

</form>

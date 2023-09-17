<div class="container">
    <h2>{{ __('Contact') }}</h2>

    <p>{{ __('messages.contact-description') }}</p>

    <div class="grid grid-cols-1 lg:grid-cols-5 gap-y-5 lg:gap-x-5 my-16">



        <div class="col-span-3 bg-white min-h-[100px] rounded-lg shadow-lg lg:order-2">

            {{-- FORM --}}
            <form action="{{ route('contact-form') }}" method="POST"
                class="grid grid-cols-1 lg:grid-cols-2 gap-y-6 lg:gap-x-8 py-8 px-2 md:px-8" novalidate>
                @csrf


                {{-- ALERT --}}
                <div class="col-span-full">
                    @if (session('success'))
                        <x-alert title="{{ __('Success') }}" type="success">
                            {{ session('success') }}
                        </x-alert>
                    @elseif($errors->any())
                        <x-alert title="{{ __('Warning') }}" type="warning">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </x-alert>
                    @endif
                </div>

                {{-- NAME --}}
                <div class="cols-span-2 lg:col-span-1">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                        {{ __('Name') }}
                    </label>
                    <div class="mt-2">
                        <input id="name" name="name" type="name" autocomplete="name"
                            class="block w-full rounded-md border-0 p-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6 @error('name') ring-red-600 @enderror"
                            value="{{ old('name') }}">
                    </div>
                </div>

                {{-- EMAIL --}}
                <div class="col-span-2 lg:col-span-1">
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">
                        {{ __('Email') }}
                    </label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6 @error('email') ring-red-600 @enderror"
                            value="{{ old('email') }}">
                    </div>
                </div>

                {{-- SUBJECT --}}
                <div class="col-span-2">
                    <label for="subject" class="block text-sm font-medium leading-6 text-gray-900">
                        {{ __('Subject') }}
                    </label>
                    <div class="mt-2">
                        <input id="subject" name="subject" type="text"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6 @error('subject') ring-red-600 @enderror"
                            value="{{ old('subject') }}">
                    </div>
                </div>

                {{-- TEXTAREA --}}
                <div class="col-span-2">
                    <label for="message"
                        class="block text-sm font-medium leading-6 text-gray-900">{{ __('Message') }}</label>
                    <div class="mt-2">
                        <textarea id="message" name="message" rows="10"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-cyan-600 sm:text-sm sm:leading-6 @error('message') ring-red-600 @enderror">{{ old('message') }}</textarea>
                    </div>
                </div>

                {{-- SUBMIT BUTTON --}}
                <div class="col-span-full mx-auto" x-data="{ showLoader: false }">
                    <button type="submit" @click="showLoader = true"
                        class="rounded-m px-12 py-4 font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600 relative">
                        <template x-if="showLoader">
                            <i class="fa-solid fa-circle-notch fa-spin absolute top-5 left-4"></i>
                        </template>
                        {{ __('Send Message') }}
                    </button>
                </div>

            </form>
        </div>

        {{-- CONTACT AND MAP --}}

        <div
            class="col-span-2
                                bg-white rounded-lg shadow-lg py-8 px-2 md:px-8 w-full flex flex-col">
            <ul class="mb-5 contact-icons">
                <li class="flex items-center gap-4 my-4">
                    <a href="https://maps.app.goo.gl/26ki11ArATKmdsRf7" target="_blank">
                        <i class="fa-solid fa-location-dot fa-lg"></i>
                    </a>
                    <div>
                        <h4 class="text-xl font-semibold">{{ __('Location') }}:</h4>
                        <div class="text-sm">Strada Nazionale Adriatica Sud 145A, Fano PU</div>
                    </div>
                </li>
                <li class="flex items-center gap-4 my-4">
                    <a href="mailto:carloeusebi@gmail.com">
                        <i class="fa-solid fa-envelope fa-lg"></i>
                    </a>
                    <div>
                        <h4 class="text-xl font-semibold">{{ __('Email') }}:</h4>
                        <div class="text-sm">carloeusebi@gmail.com</div>
                    </div>
                </li>
                <li class="flex items-center gap-4 my-4">
                    <a href="https://wa.me/0393338705977" target="_blank">
                        <i class="fa-brands fa-whatsapp fa-lg"></i>
                    </a>
                    <div>
                        <h4 class="text-xl font-semibold">{{ __('Whatsapp') }}:</h4>
                        <div class="text-sm">+39 333 8705977</div>
                    </div>
                </li>
            </ul>

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44030.51860381589!2d13.066081569364652!3d43.80956728770561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132d11f261d4a573%3A0x6dbba37380e06b15!2sStr.%20Nazionale%20Adriatica%20Sud%2C%20145A%2C%2061032%20Marotta%20PU!5e0!3m2!1sen!2sit!4v1694881927962!5m2!1sen!2sit"
                height="350" style="border:0;" allowfullscreen="" loading="lazy" class="w-full"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>


    </div>
</div>

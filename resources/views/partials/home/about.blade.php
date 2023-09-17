<div class="container text-justify">
    <h2>{{ __('About') }}</h2>

    <p class="mb-3" x-show="show"
        x-transition:enter="transform transition ease-out duration-300 sm:duration-700 delay-300"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1">
        {{ __('messages.about-1') }}
    </p>
    <p class="mb-3" x-show="show"
        x-transition:enter="transform transition ease-out duration-300 sm:duration-700 delay-300"
        x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1">
        {{ __('messages.about-2') }}
    </p>
    <p class="mb-3" x-show="show"
        x-transition:enter="transform transition ease-out duration-300 sm:duration-700 delay-300"
        x-transition:enter-start="translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1">
        {{ __('messages.about-3') }}
    </p>
    <p class="mb-3" x-show="show"
        x-transition:enter="transform transition ease-out duration-300 sm:duration-700 delay-300"
        x-transition:enter-start="-translate-x-full opacity-0" x-transition:enter-end="translate-x-0 opacity-1">
        {{ __('messages.about-4') }}
    </p>
</div>

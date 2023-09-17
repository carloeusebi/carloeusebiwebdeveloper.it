<div class="container">
    <div class="md:flex justify-between items-center mb-12">
        <h2 class="md:mb-0">{{ __('Resumee') }}</h2>
        <x-download-resumee-button />
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-10 lg:gap-20">
        @include('partials.resumee')
    </div>

</div>

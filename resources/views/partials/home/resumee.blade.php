<div class="container">
    <div class="flex justify-between items-center mb-12">
        <h2 class="mb-0">{{ __('Resumee') }}</h2>
        <button type="button"
            class="app-button rounded-m px-12 py-4 font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-cyan-600 relative">
            Download PDF
        </button>
    </div>
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-y-10 lg:gap-20">
        @include('partials.resumee')
    </div>

</div>

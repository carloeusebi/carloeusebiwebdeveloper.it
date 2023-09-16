<x-home-layout>
    <x-home-aside :$navLinks></x-home-aside>
    <main class="overflow-auto p-0 h-screen grow">
        @include('partials.home.jumbo')
        @include('partials.home.about')
        @include('partials.resumee')
        @include('partials.home.portfolio')
        @include('partials.home.contact')
    </main>
</x-home-layout>

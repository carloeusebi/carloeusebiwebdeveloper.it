<x-home-layout>

    @include('partials.home.header')

    <main class="overflow-auto p-0 h-screen grow overflow-x-hidden">

        <section id="jumbo" class="min-h-[105vh] bg-slate-600" x-intersect:enter="activeLink = 'jumbo'; show = true"
            x-intersect:leave="show = false" x-data="{ show: false }">
            @include('partials.home.jumbo')
        </section>

        <section id="about" class="min-h-[105vh] bg-yellow-600" x-intersect:enter="activeLink = 'about'">
            @include('partials.home.about')
        </section>

        <section id="resumee" class="bg-white min-h-[105vh]" x-intersect:enter="activeLink = 'resumee'">
            @include('partials.home.resumee')
        </section>

        <section id="portfolio" class="min-h-[105vh] bg-red-600" x-intersect:enter="activeLink = 'portfolio'">
            @include('partials.home.portfolio')
        </section>

        <section id="contact" class="min-h-[105vh] bg-blue-600" x-intersect:enter="activeLink = 'contact'">
            @include('partials.home.contact')
        </section>

    </main>
</x-home-layout>

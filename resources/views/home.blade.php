<x-home-layout>

    @include('partials.home.header')

    <main class="overflow-auto p-0 h-screen grow overflow-x-hidden">

        <section id="jumbo" class="px-2" x-intersect:margin.4vh="activeLink = 'jumbo'; show = true"
            x-intersect:leave="show = false" x-data="{ show: false }">
            @include('partials.home.jumbo')
        </section>

        <section id="about" class="px-2" x-intersect:margin.4vh="activeLink = 'about'">
            @include('partials.home.about')
        </section>

        <section id="resumee" class="px-2" x-intersect:margin.4vh="activeLink = 'resumee'">
            @include('partials.home.resumee')
        </section>

        <section id="portfolio" class="px-2" x-intersect:margin.4vh="activeLink = 'portfolio'">
            @include('partials.home.portfolio')
        </section>

        <section id="contact" class="px-2" x-intersect:margin.4vh="activeLink = 'contact'">
            @include('partials.home.contact')
        </section>

    </main>
</x-home-layout>

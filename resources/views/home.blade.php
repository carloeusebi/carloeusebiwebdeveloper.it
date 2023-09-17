<x-home-layout>


    <main class="overflow-auto p-0 h-screen grow overflow-x-hidden">

        <section id="jumbo" x-intersect:margin.4vh="activeLink = 'jumbo'; show = true" x-data="{ show: false }">
            @include('partials.home.jumbo')
        </section>

        <section id="about" x-intersect:margin.4vh="activeLink = 'about'" x-data="{ show: false }"
            x-intersect:enter="show = true">
            @include('partials.home.about')
        </section>

        <section id="resumee" x-intersect:margin.4vh="activeLink = 'resumee'">
            @include('partials.home.resumee')
        </section>

        <section id="portfolio" x-intersect:margin.4vh="activeLink = 'portfolio'">
            @include('partials.home.portfolio')
        </section>

        <section id="contact" x-intersect:margin.4vh="activeLink = 'contact'" x-data="{ show: false }"
            x-intersect:enter="show=true">
            @include('partials.home.contact')
        </section>

    </main>
</x-home-layout>

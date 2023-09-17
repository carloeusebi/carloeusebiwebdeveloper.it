<header
    class="main-header pt-7 w-[300px] translate-x-[-300px] lg:translate-x-0 fixed lg:static flex flex-col transition-transform duration-500 select-none z-10"
    :class="{ 'translate-x-0': open, 'translate-x-[-300px]': !open }">
    <div class="header-container flex flex-col">

        {{-- TOP PART --}}
        <div class="flex flex-col items-center">
            {{-- profile pic --}}
            <figure class="profile-pic max-w-[100px] lg:max-w-[150px] aspect-square rounded-full overflow-hidden">
                <img src="{{ asset('images/profile_pic.webp') }}" alt="Carlo Eusebi">
            </figure>
            <h3 class="text-white text-2xl font-semibold mt-4">Carlo Eusebi</h3>
            <div class="text-white mb-4"><small><em>A Web Developer</em></small></div>

            {{-- social links --}}
            <ul class="social-links flex justify-center gap-2">
                <li>
                    <a target="_blank" href="mailto:carloeusebi@gmail.com">
                        <i class="fa-solid fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.linkedin.com/in/carlo-eusebi-a283b2271/">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://www.github.com/carloeusebi">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </li>
            </ul>
        </div>


        {{-- NAVIGATION BAR --}}
        <nav class="grow">
            <ul class="nav-links p-5 lg:p-10">
                @foreach ($navLinks as $link)
                    <li @click="scrollToSection('{{ $link['name'] }}')"
                        :class="{ active: '{{ $link['name'] }}' === activeLink }">
                        <i
                            class="fa-{{ isset($link['solid']) ? 'solid' : 'regular' }} fa-{{ $link['icon'] }} fa-lg"></i>
                        {{ __($link['label']) }}
                    </li>
                @endforeach
            </ul>
        </nav>

        {{-- BOTTOM --}}
        <div class="text-center text-white py-2">
            {{-- todo language selector --}}
            <div>
                <a href="{{ route('translate', 'it') }}">IT</a>
                |
                <a href="{{ route('translate', 'en') }}">EN</a>
            </div>
            <div>
                <small>Made with Laravel and AlpineJs</small>
            </div>
        </div>

    </div>
</header>


{{-- HAMBURGER --}}
<div class="navbar-toggle flex justify-center items-center lg:hidden fixed top-4 right-4 bg-black text-white z-20"
    @click="open = !open">
    <template x-if="!open">
        <i class="fa-solid fa-bars"></i>
    </template>
    <template x-if="open">
        <i class="fa-solid fa-xmark"></i>
    </template>
</div>

<header
    class="bg-[#040b14] pt-7 w-[300px] lg:translate-x-0 fixed lg:static flex h-screen flex-col transition-transform duration-500"
    :class="{ 'translate-x-0': open, 'translate-x-[-300px]': !open }">

    {{-- TOP PART --}}
    <div class="flex flex-col items-center">
        {{-- profile pic --}}
        <figure class="profile-pic max-w-[150px] aspect-square rounded-full overflow-hidden">
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
        <ul class="nav-links p-10">
            {{-- <template x-for="link in navLinks" :key="link.label">
                <li @click=scrollToSection(link.name) :class="{ active: activeLink === link.name }">
                    <i :class="['link.solid ? fa-solid : fa-regular', `fa-${link.icon}`]"></i>
                    <span x-text="link.label"></span>
                </li>
            </template> --}}
            @foreach ($navLinks as $link)
                <li @click="scrollToSection('{{ $link['name'] }}')"
                    :class="{ active: '{{ $link['name'] }}' === activeLink }">
                    <i {{ $slot }}
                        class="fa-{{ isset($link['solid']) ? 'solid' : 'regular' }} fa-{{ $link['icon'] }}"></i>
                    {{ __($link['label']) }}
                </li>
            @endforeach
        </ul>
    </nav>

    {{-- BOTTOM --}}
    <div class="text-center text-white py-2">
        <button class="px-2 py-1" @click="console.log('it')">IT</button>
        |
        <button class="px-2 py-1" @click="console.log('en')">EN</button>
        <div>
            <small>Made with Laravel Livewire</small>
        </div>
    </div>


</header>


{{-- HAMBURGER --}}
<div class="navbar-toggle flex justify-center items-center lg:hidden fixed top-8 right-8 bg-black text-white"
    @click="open = !open">
    <template x-if="!open">
        <i class="fa-solid fa-bars"></i>
    </template>
    <template x-if="open">
        <i class="fa-solid fa-xmark"></i>
    </template>
</div>

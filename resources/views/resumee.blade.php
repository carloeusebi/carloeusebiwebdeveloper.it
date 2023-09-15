<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carlo Eusebi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/resumee.scss'])
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet" />
</head>

<body>
    <div class="container mx-auto max-w-5xl" x-data>
        <header class="flex justify-between mt-10 items-center">
            <div>
                <h1 class="text-4xl uppercase">Carlo Eusebi</h1>
                <div class="text-xl">Full Stack Web Developer</div>
            </div>
            <div class="print:hidden">
                <button type="button" class="p-1" @click="AlpineI18n.locale = 'it'">IT</button>
                |
                <button type="button" class="p-1" @click="AlpineI18n.locale = 'en'">EN</button>
            </div>
        </header>
        <div class="flex">
            <aside>
                <h3 class="text-xl mb-3" x-text="$t('Contacts')"></h3>
                <address class="min-w-[200px] print:min-w-[150px] mb-10">
                    <ul>
                        <li>
                            <i class="fa-solid fa-envelope"></i>
                            <a href="mailto:carloeusebi@gmail.com">carloeusebi@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-whatsapp"></i>
                            <a href="https://wa.me/0393338705977" target="_blank">+39 333 8705977</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-location-dot"></i>
                            <a href="https://goo.gl/maps/jNxZrkMUMSXyxDyUA" target="_blank">
                                Pesaro, Marche
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-globe"></i>
                            <a href="{{ route('home') }}" target="_blank">carloeusebiwebdeveloper.it</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-linkedin"></i>
                            <a href="https://www.linkedin.com/in/carlo-eusebi-a283b2271/"
                                target="_blank">carlo-eusebi-a283b2271</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-github"></i>
                            <a href="https://github.com/carloeusebi" target="_blank">carloeusebi</a>
                        </li>
                    </ul>
                </address>
                <section>
                    <h3 class="text-xl mb-3">Skills</h3>
                    <div>
                        <ul>
                            <li>English - C1</li>
                            <li>Html, Css & Sass</li>
                            <li>Bootsrap</li>
                            <li>Tailwind</li>
                            <li>Javascript</li>
                            <li>Typescript</li>
                            <li>Vue 3</li>
                            <li>Vuex</li>
                            <li>Pinia</li>
                            <li>PHP</li>
                            <li>SQL</li>
                            <li>Laravel</li>
                            <li>Linux & Windows</li>
                            <li>Git</li>
                            <li>GitHub Workflows</li>
                        </ul>
                    </div>
                </section>
            </aside>
            <main class="text-justify">
                <section>
                    <h2 x-text="$t('About me')"></h2>
                    <p class="mb-1" x-text="$t('about-me-1')"></p>
                    <p class="mb-1" x-text="$t('about-me-2')"></p>
                    <p class="mb-1" x-text="$t('about-me-3')"></p>
                    <p class="mb-1" x-text="$t('about-me-4')"></p>
                </section>
                <section>
                    <h2 x-text="$t('Education')"></h2>
                    <p class="text-lg">Boolean - Master Full Stack Web Developer</p>
                    <p x-text="$t('boolean')"></p>
                </section>
                <section>
                    <h2 x-text="$t('Projects')"></h2>
                    <p x-text="$t('projects-essay')">I have made plenty of little and medium size projects, some of them
                        you can check on my
                        website and most of them you can find on my github. This is the project I am
                        the most proud of:</p>
                    {{-- DSP START --}}
                    <div class="mb-2">
                        <h4 class="text-lg">Dellasanta Psicologo</h4>

                        <div>Links: <a class="underline" href="https://dellasantapsicologo.it"
                                target="_blank">dellasantapsicologo.it</a> -
                            <a class="underline" href="https://carloeusebiwebdeveloper.it/dsp" target="_blank">demo
                                Admin Panel</a>
                        </div>
                        <div>Github:
                            <a class="underline" href="https://github.com/carloeusebi/laravel-dsp"
                                target="_blank">laravel-dsp (Backend)</a> -
                            <a class="underline" href="https://github.com/carloeusebi/vue-dsp" target="_blank">vue-dsp
                                (Frontend)</a>
                        </div>
                    </div>
                    <p><span x-text="$t('Technologies')"></span>: Vue 3, Pinia, Typescript, Tailwind, Laravel,
                        Sanctum</p>
                    <h5 class="font-bold mt-3" x-text="$t('Overview:')"></h5>
                    <p x-text="$t('dsp-overview')"></p>
                    <h5 class="font-bold my-3" x-text="$t('Key Features:')"></h5>
                    <ol class="mb-3">
                        <li><strong x-text="$t('Psychological Evaluation Questionnaires')"></strong>:
                            <span x-text="$t('dsp-peq')"></span>
                        </li>
                        <li><strong x-text="$t('Patient Convenience')"></strong>:
                            <span x-text="$t('dsp-convenience')"></span>
                        </li>
                        <li><strong x-text="$t('Effortless Data Management')"></strong>:
                            <span x-text="$t('dsp-management')"></span>
                        </li>
                        <li><strong x-text="$t('Data Accessibility')"></strong>:
                            <span x-text="$t('dsp-accessibility')"></span>
                        </li>
                    </ol>
                    <h5 class="font-bold" x-text="$t('Outcome:')"></h5>
                    <p x-text="$t('dsp-outcome')"></p>
        </div>
        {{-- DSP END --}}
        </section>
        </main>
    </div>
    </div>

</body>

</html>

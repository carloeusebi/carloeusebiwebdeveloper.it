<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carlo Eusebi</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/resumee.scss'])
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"
        rel="stylesheet" />
</head>

<body>
    <div class="container mx-auto max-w-5xl">
        <header class="flex justify-between mt-10 items-end">
            <div>
                <h1 class="text-6xl uppercase">Carlo Eusebi</h1>
                <div class="text-2xl">Full Stack Web Developer</div>
            </div>
        </header>
        <div class="flex">
            <aside>
                <h3 class="text-xl mb-3">Contacts</h3>
                <address class="min-w-[225px]">
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
            </aside>
            <main>
                <section>
                    <h2>About me</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore quod corrupti voluptates! Ex
                        sint eos delectus illum, non pariatur sit laboriosam facilis a aliquid ullam saepe sapiente
                        blanditiis beatae. Minima.</p>
                </section>
                <section>
                    <h2>Education</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores qui laudantium, earum facilis
                        aut nobis expedita perferendis nesciunt pariatur, minus tempore aperiam reprehenderit culpa, nam
                        ipsa veniam modi accusamus blanditiis.</p>
                </section>
                <section>
                    <h2>Projects</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ratione quod enim mollitia sint
                        atque cum quibusdam ad id labore modi, dolores aliquam ipsa natus tempore hic veritatis quos
                        ducimus.</p>
                </section>
                <section>
                    <h2>Skills</h2>
                    <div>

                    </div>
                </section>
            </main>
        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Carlo Eusebi</title>

    @if (isset($cssString))
        {{-- fontawesome --}}
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css'
            integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=='
            crossorigin='anonymous' />

        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            html {
                font-size: 12px;
                font-family: sans-serif;
            }

            ul {
                list-style: none;
            }

            .container {
                max-width: 600px;
                margin: 0 auto;
            }

            header {
                margin-top: 2.5rem;
                margin-bottom: 1rem;
            }

            a {
                color: black;
                text-decoration: none;
            }


            h1 {
                margin-bottom: 1rem;
            }

            h3 {
                margin-bottom: 0;
            }

            #personal-data-auth {
                font-size: 10px;
                font-weight: bold;
                text-align: center;
                margin-top: 10px;
            }

            {{ $cssString }}
        </style>
    @else
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/resumee.scss'])


        <style>
            body {
                font-family: "Raleway", sans-serif;
            }
        </style>
    @endif

</head>

<body>
    <div id="resumee" class="container px-4 max-w-5xl mx-auto">

        {{-- DOWNLOAD BUTTON AND LANGUAGE SELECTOR  --}}
        @unless (isset($cssString))
            <div class="my-10 flex items-center justify-end">
                <div class="font-bold me-5 flex justify-center items-center gap-3">
                    <i class="fa-solid fa-language fa-xl"></i>
                    <x-language-selector />
                </div>
                <x-download-resumee-button />
            </div>
        @endunless


        <header>
            <div class="float-left">
                <h1 class="mb-3">CARLO EUSEBI</h1>
                <address>
                    <ul>
                        <li>
                            <a target="_blank" href="mailto:carloeusebi@gmail.com">
                                <i class="fa-regular fa-envelope"></i>
                                carloeusebi@gmail.com
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://maps.app.goo.gl/26ki11ArATKmdsRf7">
                                <i class="fa-solid fa-location-dot"></i>
                                Pesaro, Marche
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.carloeusebiwebdeveloper.it">
                                <i class="fa-solid fa-globe"></i>
                                carloeusebiwebdeveloper.it
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.linkedin.com/in/carlo-eusebi-a283b2271/">
                                <i class="fa-brands fa-linkedin"></i>
                                carlo-eusebi-a283b2271/
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://github.com/carloeusebi">
                                <i class="fa-brands fa-github"></i>
                                carloeusebi
                            </a>
                        </li>
                    </ul>
                </address>
            </div>

            <img src="https://www.carloeusebiwebdeveloper.it/images/profile_pic.webp" alt="profile pic" width="125"
                height="125">

        </header>

        <hr class="my-10">
        <div class="grid grid-cols-1 gap-10 mb-16">
            @include('partials.resumee')
        </div>

        @isset($cssString)
            <div id="personal-data-auth">Autorizzo il trattamento dei miei dati personali ai sensi del Dlgs 196 del 30
                giugno
                2003 e dell'art. 13
                GDPR</div>
        @endisset

    </div>

</body>

</html>

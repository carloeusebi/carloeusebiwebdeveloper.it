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
    <div class="container px-4 max-w-5xl mx-auto">
        <section id="resumee" class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            @include('partials.resumee')
        </section>
    </div>
</body>

</html>

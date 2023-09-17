<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Personal Portfolio for Web Developer Carlo Eusebi">
    <meta name="author" content="Carlo Eusebi">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/home.scss', 'resources/js/home.js', 'resources/css/resumee.scss'])
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="icon/ico">

</head>

<body>
    <div class="page flex" x-data="data">
        <x-navbar />
        {{ $slot }}
    </div>
</body>

</html>

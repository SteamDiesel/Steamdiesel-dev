<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--
    <meta property="og:url" content="https://www.your-domain.com/your-page.html" /> --}}
    {{--
    <meta property="og:type" content="website" />
    <meta property="og:title" content="title" />
    <meta property="og:description" content="Your description" />
    <meta property="og:image" content="/images/splat01_cropped_sm.png" /> --}}


    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @routes
    @vite('resources/js/app.js')
    @inertiaHead
</head>

<body class="font-sans antialiased">
    @inertia
</body>

</html>

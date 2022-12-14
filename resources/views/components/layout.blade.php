<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="{{ asset('favicon.svg') }}" type="image/svg+xml" />

    <x-seo::meta />

    @vite('resources/css/app.css')

    {{ isset($head) ? $head : null }}
</head>
<body class="min-h-screen">
    {{ $slot }}
</body>
</html>

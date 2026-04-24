<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <meta content="{{ $deskripsi ?? config('app.deskripsi') }}" name="description">
    <meta content="{{ $keyword ?? config('app.keyword') }}" name="keywords">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>

<body>
    <livewire:pages::nav />
    {{ $slot }}
    <livewire:pages::footer />

    @livewireScripts
    @stack('scripts')

</body>

</html>
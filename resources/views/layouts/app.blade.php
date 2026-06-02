<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <meta content="{{ $deskripsi ?? config('app.deskripsi') }}" name="description">
    <meta content="{{ $keyword ?? config('app.keyword') }}" name="keywords">
    <meta property="og:image" content="{{ asset('logo.png') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div id="page-loader" class="fixed inset-0 bg-white dark:bg-black z-[9999] hidden">
        <div class="p-4 space-y-4 animate-pulse">
            <div class="h-10 bg-gray-200 rounded-xl w-1/3"></div>
            <div class="h-40 bg-gray-200 rounded-2xl"></div>
            <div class="grid grid-cols-2 gap-4">
                <div class="h-32 bg-gray-200 rounded-2xl"></div>
                <div class="h-32 bg-gray-200 rounded-2xl"></div>
            </div>
        </div>
    </div>
    <div id="app-content">
        <livewire:pages::nav />
        {{ $slot }}
        <livewire:pages::footer />
    </div>
    @livewireScripts
    @stack('scripts')
    <script>
        @if(isset($visitId))
            localStorage.setItem('visit_id', '{{ $visitId }}');
        @endif
    </script>
</body>

</html>
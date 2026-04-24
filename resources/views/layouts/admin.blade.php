<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>{{ $title ?? config('app.name') }}</title>

  @vite(['resources/css/admin.css', 'resources/js/app.js'])

  @livewireStyles
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
  <div class="flex h-screen overflow-hidden">

    <livewire:admin.sidebar />

    <!-- Overlay for mobile sidebar -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden md:hidden transition-opacity">
    </div>

    <!-- Main Content -->
    {{ $slot }}
  </div>

  @livewireScripts

  @stack('scripts')

</body>

</html>
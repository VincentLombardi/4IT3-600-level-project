<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}@isset($title) | {{ $title }}@endisset</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
</head>
<body class=" flex flex-col min-h-screen font-sans  bg-gray-200">
@include('layouts.navigation')
<!-- Page Content -->
    <main class="p-1 flex-grow">
        {{ $slot }}
    </main>
@include('layouts.footer')
@livewireScripts
</body>
</html>

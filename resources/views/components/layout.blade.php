<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    {{-- <link rel="stylesheet" href="style.css" /> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title> Artisan Corner </title>
    @livewireStyles
  </head>
  <body>
    <x-navbar />
    <x-header />

    <div class="min-vh-100">
    {{$slot}}
    </div>

    <x-footer />

    @livewireScripts
    <script src="main.js"></script>
  </body>
</html>

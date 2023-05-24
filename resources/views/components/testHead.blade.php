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
    @vite(['resources/css/form.css', 'resources/js/main.js'])
   <link rel="stylesheet" href="/resources/css/form.css">
    <title> Artisan Corner </title>
    @livewireStyles
  </head>
  <body>


    <div class="min-vh-100">
    {{$slot}}
    </div>

    @livewireScripts
    <script src="main.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <title>{{ config("app.name", "Laravel") }}</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net" />
  <link href="https://fonts.bunny.net/css?family=abhaya-libre:500|alegreya-sans-sc:400,700|alexandria:400,700" rel="stylesheet" />

  <!-- Scripts -->
  @vite(['resources/css/app.css', 'resources/sass/app.scss'])
</head>

<body>
  <!-- Page Content -->

  <!-- header -->
  @include('partials._header')

  <main>
    {{ $slot }}
  </main>

  <!-- footer -->
  @include('partials._footer')

  @vite(['resources/js/app.js'])
</body>

</html>

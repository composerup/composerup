<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="{{ asset('images/fav.png') }}">
  <title>Composerup</title>
  {{-- @vite('resources/css/app.css') --}}
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  @yield('content')
</body>
</html>

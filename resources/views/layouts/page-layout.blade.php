<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/main.css') }}">
  <title>@yield('title')</title>
</head>
<body>
  <header class="header">
    @include('includes.header')
  </header>
  <main class="main">
    @yield('content')
  </main>
  <footer class="footer">
    @include('includes.footer')
  </footer>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
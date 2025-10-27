<!DOCTYPE html>
<html>
<head>
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

  <div class="header">
    <h1>Firza's Pick</h1>
    <div class="menu">
      <a href="/">Home</a>
      <a href="/about">About</a>
      <a href="/services">Services</a>
      <a href="/gallery">Gallery</a>
      <a href="/contact">Contact</a>
    </div>
  </div>

  <div class="content">
    @yield('content')
  </div>

  <div class="footer">
    <p>© 2025 Firza's Pick</p>
  </div>

</body>
</html>

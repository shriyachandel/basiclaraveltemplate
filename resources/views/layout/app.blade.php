<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('title')
  @include('include.header')
</head>
<body>
  @include('include.navbar')
  @yield('content')
  @yield('carousel')
  @yield('booking')
  @yield('About')
  @yield('modal')
  @yield('feature')
  @yield('food')
  @yield('menu')
  @yield('team')
  @yield('testimonial')
  @yield('contact')
  @yield('blog')

  @include('include.footer')
  @include('include.script')
</body>
</html>
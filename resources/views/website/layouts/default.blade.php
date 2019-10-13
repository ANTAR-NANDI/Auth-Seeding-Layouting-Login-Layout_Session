<!DOCTYPE html>
<html lang="en">

<head>
  @include('website.includes.head')
</head>

<body>

  @include('website.includes.header')
  
  @yield('abc')

  @include('website.includes.footer')

</body>

</html>

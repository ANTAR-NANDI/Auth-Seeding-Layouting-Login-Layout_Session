<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.includes.head')
</head>

<body>

  @include('admin.includes.header')
  @include('admin.includes.sidebar')
  
  @yield('abc')

  @include('admin.includes.footer')

</body>

</html>

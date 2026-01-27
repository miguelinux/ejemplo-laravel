<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8" />
 <meta http-equiv="x-ua-compatible" content="ie=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <!--
 <link rel="stylesheet" href="css/base.css">
 <link rel="icon" href="img/favicon.png">
 -->

 @stack('css')

 <title>@yield('title','valor por default')</title>
 </head>
<body>

  <header></header>

  @yield('content')

  <footer></footer>
</body>
</html>
<!-- vi: set shiftwidth=2 tabstop=2 expandtab: -->

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
 <title>Laravel 12</title>
 </head>
<body>

@if ($categoria)
        <h1>Post {{$post}} de {{$categoria}} vista</h1>
@else
        <h1>Post con número {{$post}} vista</h1>
@endif


</body>
</html>
<!-- vi: set shiftwidth=2 tabstop=2 expandtab: -->

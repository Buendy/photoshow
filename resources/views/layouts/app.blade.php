<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.1/css/foundation.css">
    <title>Photoshow</title>
</head>
<body>
@include('partials.topbar')
<br>
<div class="row">
    @include('partials.messages')
    @yield('content')
</div>
</body>
</html>

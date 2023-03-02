<html>
<head>
    <title>Hola Edwing - @yield('title')</title>
    <!-- Enlace a los archivos CSS de Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-qFXb16tJx1I+QH0oFcP0oBUnC9J89tZ+1NTY0dBjNwJf8p91NlnEZPZTpI+J2KvX9WfZGzi/5IYpxDEjyyw8Fg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Enlace a los archivos JavaScript de Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-H5o0vfe8u6KK75i1qKdH0NRmVAmxdX1W2egi7oYzou2T6xy8TbTGWmlVjE/1hflUvzpzX6pZU6BlhU6STWLkCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
@section('sidebar')
    Texto de la vista principal
@show
<div class="container">
    @yield('content')
</div>
</body>
</html>

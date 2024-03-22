<!-- resources/views/dashboard.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Aquí puedes agregar tus estilos CSS -->
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <ul>


            {{-- Código para administradores --}}
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>

            <li><a href="{{ route('posts') }}">posts</a></li>

            <!-- Otros enlaces de menú... -->
        </ul>
    </div>

    <!-- Contenido principal -->
    <div class="main-content">
        <!-- Aquí puedes incluir el contenido de tu página -->
        @yield('content')
    </div>
</body>

</html>

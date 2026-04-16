<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">

        <!-- Header -->
        <div class="profile-header">
            <h2>Perfil de Usuario</h2>
            <p>Bienvenido, {{ $user->name }}</p>
        </div>

        <!-- Avatar -->
        <div class="avatar">
            {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>

        <!-- Información -->
        <div class="profile-info">
            <div class="info-item">
                <span>Nombre completo:</span>
                <p>{{ $user->name }} {{ $user->lastname }}</p>
            </div>

            <div class="info-item">
                <span>Usuario:</span>
                <p>{{ $user->user }}</p>
            </div>

            <div class="info-item">
                <span>Correo:</span>
                <p>{{ $user->email }}</p>
            </div>
        </div>
        @include('partials.edit-profile')
        <!-- Acciones -->
        <div class="actions">
            <button class="btn secondary" onclick="openModal()">
                Editar Perfil
            </button>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit" class="btn danger">
                    Cerrar Sesión
                </button>
            </form>
        </div>
    </div>
    <script src="../js/profile.js"></script>
</body>
</html>
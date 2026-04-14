<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form in HTML and CSS | Codehal</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="/login" method="post">
            <h1>Inicio Sesion</h1>
            <div class="input-box">
                <input type="text" placeholder="Correo" name="correo" required>
                <!-- <i class='bx bxs-user' ></i> -->
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" name="clave" required>
                <!-- <i class='bx bxs-lock-alt'></i> -->
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox"> Recuerdame</label>
                <a href="#">¿Olvidastes tu contraseña?</a>
            </div>
            <button type="submit" class="btn">Iniciar Sesion</button>
            <div class="register-link">
                <p>¿No tienes una cuenta? <a href="/register">Registrate</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>
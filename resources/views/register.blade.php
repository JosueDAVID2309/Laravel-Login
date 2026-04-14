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
        <form action="">
            <h1>Registrate</h1>
            <div class="input-box">
                <input type="text" placeholder="Nombres" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Apellidos" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Usuario" required>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Correo" required>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>¿Ya posees una cuenta? <a href="/">Iniciar Sesion</a></p>
            </div>
        </form>
    </div>
</body>
</html>
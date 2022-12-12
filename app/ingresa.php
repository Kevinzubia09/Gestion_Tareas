<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Bienvenido a mi Formulario</title>
</head>

<body>
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido a Lista de tareas</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button onclick="window.location.href='login.php'" class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
        <form class="formulario" action="#" method="POST">
            <h2 class="create-account">Crear una cuenta</h2>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Contraseña" name="password">
            <input type="button" value="Registrarse">
            <input type="button" value="Recuperar contraseña">
        </form>
    </div>
    <div class="container-form sign-in">
        <form class="formulario">
            <h2 class="create-account">Iniciar Sesion</h2>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Contraseña">
            <input type="button" value="Iniciar Sesion">
        </form>
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
            <div class="welcome-back2">
                <div class="message">
                    <h2>Bienvenido a recuperar tu contraseña</h2>
                    <p>Si la olvidaste ingresa una nueva aqui</p>
                    <button class="sign-in-btn">Recuperar contraseña</button>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
</body>

</html>
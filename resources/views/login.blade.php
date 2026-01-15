<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
</head>
<body>
<!--Aquí crearemos nuestro formulario de Login/Inicio Sesión-->
    <div class="formulario_Login">
        <h1>Iniciar Sesión</h1>
        <form action="/login" method="POST">
        <label for="name">Nombre de usuario :</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Contraseña :</label><br>
        <input type="text" id="email" name="email" required><br>
        <a href="#">¿Olvidaste tu contraseña?</a><br>
        <button type="submit">Iniciar Sesión</button><br>
        <p>¿No tienes una cuenta? <a href="#">Registrarse</a></p>
    </form>
    </div>
    <div class="formulario_Registro">
        <h1>Restrigrarse</h1>
    </div>
</body>
</html>
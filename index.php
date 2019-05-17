<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/inicio.css">
</head>
<body>

    <header><img src="img/logo.jpg" alt="logo" style= "width:65px; height:65px;" class="logo"></header>

    <div id = "formulario">
    <form action="main.php">
    <p>Nombre de usuario </p>
    <p><input type="text" id = "usuario" name = "usuario" required></p>
    <p>Password </p>
    <p><input type="password" id = "pass" name = "pass" required></p>
    <p><input type="submit" value = "Ingresar" id="enviar"> 
    <input type="reset" value = "Limpiar" id = "limpiar"></p>
    </form>
    </div>
    
    
</body>
</html>
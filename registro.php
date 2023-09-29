<?php include ('db.php') ?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="./style/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Inicio de sesion</title>
    </head>
    <body>

        <form action="Logueo/registro.php" method="POST">
            <a href="login.php">
                <img src="img/volver-flecha.png" width="20" height="20"></img>
            </a>
            <br><br>
        
            <h2 style="margin-left:-5%;">Registrarse</h2>
            <i class="fa-solid fa-user"></i>
            <label>Usuario</label>
            <input type="text" name="nombre_usuario" placeholder="Nombre de usuario" autofocus required>
            <input type="text" name="nombre" placeholder="Nombre" autofocus>
            <input type="text" name="apellido" placeholder="Apellido" autofocus>
            <input type="text" name="gmail" placeholder="@gmail.com" autofocus required>
            <i class="fa-solid fa-unlock"></i>
            <label>Contraseña</label>
            <input type="password" name="contraseña" placeholder="Contraseña" required>
            <hr>
            <input href="index.php" name="sigin_up" class="btn btn-success"  value="Registrarse" type="submit"></input>
        </form> 

            
    </body>
</html>

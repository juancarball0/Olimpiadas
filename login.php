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
        
        <form action="Logueo/inicio.php" method="POST">
            <img src="img/logo.png" width="100" height="120" style="margin-left:35%; margin-top:-10%;">
                <h2>HOSPITAL</h2>
                <h2 style="margin-left:-15%;">Carlo Magno IV</h2>
                <i class="fa-solid fa-user"></i>
                <label>Email del Usuario</label>
                <input type="text" name="Usuario" placeholder="Email" autofocus>
                <i class="fa-solid fa-unlock"></i>
                <label>Contraseña</label>
                <input type="password" name="contraseña" placeholder="Contraseña">
                <hr>
                <input href="index.php" class="btn btn-success" value="Iniciar Sesion" type="submit"></input>
                <label style="margin-left:25%; ">¿No te has registrado?</label>
                <br>
                <a href="registro.php" style="font-size:20px; margin-left:35%;">Registrarse</a>
        </form> 

            
    </body>
</html>

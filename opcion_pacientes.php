<?php include('db.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   
    .grid{
        display: flex;
        margin-left:40%;
        top:-120%;
    

    }
    .contenedor{ 
        border:3px solid grey;
        padding:10px;
        border-radius:10px;
        margin-top:0%;
        position:relative;
        margin-top:-75%;
        height:20%;
        
    }
    .contenedor1{ 
        margin:10%;
        border:3px solid grey;
        padding:10px;
        border-radius:10px;
        margin-top:0%;
        position:relative;
        margin-top:-75%;
        height:20%;
      
    }
    h1{text-decoration:none;}

</style>
<body>
    <?php include('includes/header.php') ?>
    <div class="grid text-center">
        <div class="contenedor">
            <a href="carga_pacientes.php"><img src="img/paciente.png" width="300" height="300" ></img><h1>Añadir Paciente</h1></a>
         
        </div>
        <div class="contenedor1">
            <a href="ver_pacientes.php"><img src="img/grupo.png" width="300" height="300" ></img><h1>Ver Pacientes</h1></a>
        </div>
    </div>

</body>
</html>
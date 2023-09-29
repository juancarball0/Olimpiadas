<?php include('../db.php') ;

if (isset($_POST['sigin_up'])){

    $nombre_usuario = $_POST['nombre_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $gmail = $_POST['gmail'];
    $contraseña = $_POST['contraseña'];
    
    
    
    $query = "INSERT INTO usuario(nombre_usuario, nombre, apellido, gmail, contraseña ) VALUES ('$nombre_usuario', '$nombre', '$apellido', '$gmail', '$contraseña')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }
    
    $_SESSION['message'] = 'Usuario Save Succefully';
    $_SESSION['message_type'] = 'success';
    
    header("location:../login.php");
    
    } ?>
    
    
    
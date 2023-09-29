<?php include ('../db.php');
  if (isset($_GET['id_u'])){
    $id = $_GET['id_u'];
    $query = "DELETE FROM usuario WHERE id_u = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'User Removed Successfully';
    $_SESSION['message_type'] = 'danger';

    header("Location:../ver_usuarios.php");

}
?>

<?php include ('../db.php');
  if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM paciente WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }
    $_SESSION['message'] = 'pacientes Removed Successfully';
    $_SESSION['message_type'] = 'danger';

    header("Location:../ver_pacientes.php");

}
?>

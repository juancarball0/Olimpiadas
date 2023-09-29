<?php include ('../db.php');
if (isset($_POST['save_nurse'])){

$nombre_E = $_POST['nombre_E'];
$apellido_E = $_POST['apellido_E'];
$dni_E = $_POST['dni_E'];
$nro_tel = $_POST['nro_tel'];
$DomicilioE = $_POST['DomicilioE'];
$BarrioE = $_POST['BarrioE'];
$especialidad = $_POST['especialidad'];



$query = "INSERT INTO enfermero(nombre_E, apellido_E, dni_E, nro_tel, DomicilioE, BarrioE, especialidad) VALUES ('$nombre_E', '$apellido_E', '$dni_E', '$nro_tel', '$DomicilioE', '$BarrioE', '$especialidad')";
$result = mysqli_query($conn, $query);
if (!$result){
    die("Query Failed");
}

$_SESSION['message'] = 'Enfermero Save Succefully';
$_SESSION['message_type'] = 'success';

header("location:../carga_n.php");

} ?>
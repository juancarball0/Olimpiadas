<?php include ('../db.php');

if (isset($_POST['save_paciente'])){

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$nro_tel = $_POST['nro_tel'];
$obra_social = $_POST['obra_social'];
$DomicilioP = $_POST['DomicilioP'];
$BarrioP = $_POST['BarrioP'];
$estado = $_POST['estado'];
$tipo_sangre = $_POST['tipo_sangre'];
$descripcion = $_POST['descripcion'];



$query = "INSERT INTO paciente(nombre, apellido, dni, nro_tel, obra_social, DomicilioP, BarrioP, estado, tipo_sangre,  descripcion) VALUES ('$nombre', '$apellido', '$dni', '$nro_tel', '$obra_social', '$DomicilioP', '$BarrioP', '$estado', '$tipo_sangre', '$descripcion')";
$result = mysqli_query($conn, $query);
if (!$result){
    die("Query Failed");
}

$_SESSION['message'] = 'Paciente Save Succefully';
$_SESSION['message_type'] = 'success';

header("location:../carga_pacientes.php");

} ?>



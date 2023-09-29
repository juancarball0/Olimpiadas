<?php include ('../db.php') ; 

$nombre_E = "";
$apellido_E = "";
$dni_E = "";
$nro_tel = "";
$DomicilioE = "";
$BarrioE = "";
$especialidad = "";

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="SELECT * FROM enfermero WHERE id=$id";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1);{
        $row=mysqli_fetch_array($result);
        $nombre_E = $row['nombre_E'];
        $apellido_E = $row['apellido_E'];
        $dni_E = $row['dni_E'];
        $nro_tel = $row['nro_tel'];
        $DomicilioE = $row['DomicilioE'];
        $BarrioE = $row['BarrioE'];
        $especialidad = $row['especialidad'];

    }


}

if (isset($_POST['update_enfermero'])) {
    $id = $_GET['id'];
    $nombre_E = $_POST['nombre_E'];
    $apellido_E = $_POST['apellido_E'];
    $dni_E = $_POST['dni_E'];
    $nro_tel = $_POST['nro_tel'];
    $DomicilioE = $_POST['DomicilioE'];
    $BarrioE = $_POST['BarrioE'];
    $especialidad = $_POST['especialidad'];
    $query = "UPDATE enfermero set nombre_E = '$nombre_E', apellido_E = '$apellido_E', dni_E = '$dni_E', nro_tel = '$nro_tel', DomicilioE = '$DomicilioE', BarrioE = '$BarrioE', especialidad = '$especialidad'  WHERE id=$id";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Enfermero Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header("Location: ../ver_enfermero.php");

}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="container-fluid">
    <div class="col-md-4">
        <div class="card card-body">
            <h1>Actualizar Datos del Enfermero</h1>
            <form action="edit.php?id=<?php echo $_GET['id'];?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control"  name="nombre_E" placeholder="Nombre" autofocus value="<?php echo $nombre_E; ?>">
                    <br>
                    <input type="text" class="form-control"  name="apellido_E" placeholder="Apellido" autofocus value="<?php echo $apellido_E; ?>" >
                    <br>
                    <input type="text" class="form-control"  name="dni_E" placeholder="DNI" autofocus value="<?php echo $dni_E; ?>" >
                    <br>
                    <input type="text" class="form-control" name="nro_tel" placeholder="Nro telefono" autofocus value="<?php echo $nro_tel; ?>" >
                    <br>
                    <input type="text" class="form-control" name="DomicilioE" placeholder="Domicilio" autofocus value="<?php echo $DomicilioE; ?>" >
                    <br>
                    <input type="text" class="form-control" name="BarrioE" placeholder="Barrio" autofocus value="<?php echo $BarrioE; ?>" >
                    <br>
                    <input type="text" class="form-control"  name="especialidad" placeholder="Especialidad" autofocus value="<?php echo $especialidad; ?>" >
                    <hr>
                </div>
                <input type="submit" name="update_enfermero" value="Actualizar Datos del Enfermero" class="btn btn-primary w-100">
            </form>
        </div> 
    </div>
</div>



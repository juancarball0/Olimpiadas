<?php include ('../db.php') ; 

$nombre = "";
$apellido = "";
$dni = "";
$nro_tel = "";
$DomicilioP = "";
$BarrioP = "";
$obra_social = "";
$estado = "";
$tipo_sangre = "";
$descripcion = "";

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $query="SELECT * FROM paciente WHERE id=$id";
    $result=mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1);{
        $row=mysqli_fetch_array($result);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $dni = $row['dni'];
        $nro_tel = $row['nro_tel'];
        $DomicilioP = $row['DomicilioP'];
        $BarrioP = $row['BarrioP'];
        $obra_social = $row['obra_social'];
        $estado = $row['estado'];
        $tipo_sangre = $row['tipo_sangre'];
        $descripcion = $row['descripcion'];

    }


}

if (isset($_POST['update_paciente'])) {
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $nro_tel = $_POST['nro_tel'];
    $DomicilioP = $_POST['DomicilioP'];
    $BarrioP = $_POST['BarrioP'];
    $obra_social = $_POST['obra_social'];
    $estado = $_POST['estado'];
    $tipo_sangre = $_POST['tipo_sangre'];
    $descripcion = $_POST['descripcion'];

    $query = "UPDATE paciente set nombre = '$nombre', apellido = '$apellido', dni = '$dni', nro_tel = '$nro_tel', DomicilioP = '$DomicilioP', BarrioP = '$BarrioP', obra_social = '$obra_social', estado = '$estado', tipo_sangre = '$tipo_sangre', descripcion = '$descripcion' WHERE id = $id";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("Query Failed");
    }

    $_SESSION['message'] = 'Paciente Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header("Location: ../ver_pacientes.php");

}

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="container-fluid">
    <div class="col-md-4">
        <div class="card card-body">
            <h1>Actualizar Datos del Paciente</h1>
            <form action="edit_paciente.php?id=<?php echo $_GET['p.id'];?>" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control"  name="nombre" placeholder="Nombre" autofocus value="<?php echo $nombre; ?>">
                    <br>
                    <input type="text" class="form-control"  name="apellido" placeholder="Apellido" autofocus value="<?php echo $apellido; ?>" >
                    <br>
                    <input type="text" class="form-control"  name="dni" placeholder="DNI" autofocus value="<?php echo $dni; ?>" >
                    <br>
                    <input type="text" class="form-control" name="DomicilioP" placeholder="Domicilio" autofocus value="<?php echo $DomicilioP; ?>" >
                    <br>
                    <input type="text" class="form-control" name="BarrioP" placeholder="Barrio" autofocus value="<?php echo $BarrioP; ?>" >
                    <br>
                    <input type="text" class="form-control" name="nro_tel" placeholder="Nro telefono" autofocus value="<?php echo $nro_tel; ?>" >
                    <br>
                    <input type="text" class="form-control"  name="obra_social" placeholder="Obra social" autofocus value="<?php echo $obra_social; ?>" >
                    <br>
                    <input type="text" class="form-control" name="estado" placeholder="Estado" autofocus value="<?php echo $estado; ?>" >
                    <br>
                    <input type="text" class="form-control" name="tipo_sangre" placeholder="Tipo de Sangre" autofocus value="<?php echo $tipo_sangre; ?>" >
                    <br>
                    <textarea name="descripcion" placeholder="Descripcion" maxlength="200" rows="2" class="w-100 form-control" autofocus value="<?php echo $descripcion;?> "></textarea> 
                    <hr>
                </div>
                <input type="submit" name="update_paciente" value="Agregar" class="btn btn-primary w-100">
            </form>
        </div> 
    </div>
</div>



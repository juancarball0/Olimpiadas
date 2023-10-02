<?php include('db.php');
error_reporting(0);

?>
<?php include('includes/header.php') ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<style>
      .grid{
        display: flex;
        flex-wrap: wrap;
        margin-left:30%;
        top:-110%;
    

    }
    .caja{ 
        border:3px solid grey;
        border-radius:10px;
        margin-top:5%;
        position:relative;
        margin-top:-95%;
        

        }
    h1{
    text-align:center;}

</style>
<div class="grid text-center">
    <div class="container-fluid">
        <div class="col-7">
            <div class="caja">
                <table class="table table-bordered">
                    <thead>
                        <h1>Pacientes</h1>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Dni</th>
                            <th>Nº tel</th>
                            <th>Domicilio</th>
                            <th>Barrio</th>
                            <th>Obra Social</th>
                            <th>Estado</th>
                            <th>tipo_sangre</th>
                            <th>descripcion</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $query = "SELECT * FROM paciente";
                        $result_tasks = mysqli_query($conn, $query);    

                        while($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['dni'] ?></td>
                            <td><?php echo $row['nro_tel'] ?></td>
                            <td><?php echo $row['DomicilioP'] ?></td>
                            <td><?php echo $row['BarrioP'] ?></td>
                            <td><?php echo $row['obra_social'] ?></td>
                            <td><?php echo $row['estado'] ?></td>
                            <td><?php echo $row['tipo_sangre'] ?></td>
                            <td><?php echo $row['descripcion'] ?></td>
                            <td>
                                <a href="patients/edit_paciente.php?id=<?php echo $row['id']?>" class="btn btn-warning" style="width:100%">
                                    <i class="fas fa-marker">Update</i>
                                </a>
                                <br>
                                <br>
                                <a href="patients/delete_paciente.php?id=<?php echo $row['id']?>" class="btn btn-danger" style="width:100%">
                                    <i class="far fa-trash-alt">Delete</i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 
    
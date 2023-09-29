<?php include ('db.php') ?>
<?php include ('includes/header.php') ?>

<style>
    .grid{
        display: flex;
        flex-wrap: wrap;
        margin-left:40%;
        top:-120%;
    

    }
    .caja{ 
        margin-top:5%;
        position:relative;
        margin-top:-75%;
        

        }
    h1{
    text-align:center;}
</style>
    <div class="grid text-center">
        <div class="container-fluid">
            <div class="caja">
                <div class="col-6">
                    <div class="card card-body">
                        <form action="nurses/save.php" method="POST">
                            <div class="form-group">
                                <h1>Datos del Enfermero</h1>
                                    <input type="text" class="form-control"  name="nombre_E" placeholder="Nombre" required>
                                    <br>
                                    <input type="text" class="form-control"  name="apellido_E" placeholder="Apellido" required>
                                    <br>
                                    <input type="text" class="form-control"  name="dni_E" placeholder="DNI" required >
                                    <br>
                                    <input type="text" class="form-control" name="nro_tel" placeholder="Nro telefono"  autofocus>
                                    <br>
                                    <input type="text" class="form-control" name="DomicilioE" placeholder="Domicilio"  autofocus>
                                    <br>
                                    <input type="text" class="form-control" name="BarrioE" placeholder="Barrio"  autofocus>
                                    <br>
                                    <input type="text" class="form-control"  name="especialidad" placeholder="Especialidad" required>
                            </div>
                            <hr>
                            <input type="submit" name="save_nurse" value="Guardar Enfermero" class="btn btn-primary w-100">
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
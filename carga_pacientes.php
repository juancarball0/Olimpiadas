<?php include ('db.php') ?>
<?php include ('includes/header.php') ?>

<style>
    .grid{
        display: flex;
        flex-wrap: wrap;
        margin-left:40%;
        top:-110%;
    

    }
    .caja{ 
        margin-top:5%;
        position:relative;
        margin-top:-80%;
        

        }
    h1{
    text-align:center;}
</style>
    <div class="grid text-center">
        <div class="container-fluid">
            <div class="caja">
                <div class="col-6">
                    <div class="card card-body">
                        <form action="patients/save_paciente.php" method="POST">
                            <div class="form-group">
                                <h1>Datos del paciente</h1>
                                    <input type="text" class="form-control"  name="nombre" placeholder="Nombre" required>
                                    <br>
                                    <input type="text" class="form-control"  name="apellido" placeholder="Apellido" required>
                                    <br>
                                    <input type="text" class="form-control"  name="dni" placeholder="DNI" required >
                                    <br>
                                    <input type="text" class="form-control" name="nro_tel" placeholder="Nro telefono"  autofocus>
                                    <br>
                                    <input type="text" class="form-control"  name="obra_social" placeholder="Obra social" required>
                                    <br>
                                    <input type="text" class="form-control" name="DomicilioP" placeholder="Domicilio"  autofocus>
                                    <br>
                                    <input type="text" class="form-control" name="BarrioP" placeholder="Barrio"  autofocus>
                                    <br>
                                    <input type="text" class="form-control"  name="estado" placeholder="Estado" required>
                                    <br>
                                    <input type="text" class="form-control" name="tipo_sangre" placeholder="grupo sanguineo" required>
                                    <br>
                                    <textarea name="descripcion" placeholder="Descripcion" maxlength="200" rows="2" class="w-100 form-control"></textarea>
                            </div>
                            <hr>
                            <input type="submit" name="save_paciente" value="Guardar Paciente" class="btn btn-primary w-100">
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>


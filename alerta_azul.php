<?php include('db.php');error_reporting(0);?>
<?php include('includes/header.php') ?>


<style>
    .grid{
        display: flex;
        flex-wrap: wrap;
        margin-left:15%;
        top:-110%;
    

    }
    .caja{ 
        margin-top:5%;
        position:relative;
        margin-top:-55%;
        

    }
</style>
<div class="grid text-center">
        <div class="container-fluid">
            <div class="caja">
                <h1>Alerta de Emergencia Hospitalaria</h1>
                
                <button id="emergencyButton" onclick="activarAlerta()">Alerta de Emergencia</button>
            </div>
        </div>
    </div>

    
    
    

    <script>
        function activarAlerta() {
            document.body.style.backgroundColor = "blue";
            alert("¡Alerta de emergencia activada! El personal del hospital ha sido notificado.");
        }
    </script>

<?php include('includes/footer.php')?>
<?php include('db.php');error_reporting(0);?>
<?php include('includes/header.php') ?>



<h1>Alerta de Emergencia Hospitalaria</h1>
    

    <button id="emergencyButton" onclick="activarAlerta()">Alerta de Emergencia</button>

    <script>
        function activarAlerta() {
            document.body.style.backgroundColor = "blue";
            alert("¡Alerta de emergencia activada! El personal del hospital ha sido notificado.");
        }
    </script>

<?php include('includes/footer.php')?>
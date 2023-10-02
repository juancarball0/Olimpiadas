<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
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
    .header{ 
        margin-top:3%;
        position:relative;
        margin-top:-55%;
        margin-left:-1%;
    

    }
</style>
<body>
    <?php include('includes/header.php');?>
    <div class="grid text-center">
        <div class="container-fluid">
            <div class="caja">
                <div class="header mt-0 d-flex justify-content-start aling-items-start bg-danger bg-opacity-25">
                    <h2  >Bienvenidos</h2>
                </div>
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="https://www.semana.com/resizer/zTmr3XGoejwhnVyFAO2R7FlYM0s=/1280x0/smart/filters:format(jpg):quality(80)/cloudfront-us-east-1.images.arcpublishing.com/semana/V3L2SD7USNGLPPNM66VBWWMLTU.jpg" class="d-block w-100" alt="..." width="200" height="537">
                    </div>
                    <div class="carousel-item">
                    <img src="https://www.infobae.com/new-resizer/ZaeAbtWOle6Sg4bLbUBQSXgleX0=/arc-anglerfish-arc2-prod-infobae/public/II5455N67RBHJH5MQXBSADTUYE.jpg" class="d-block w-100" alt="..." width="200" height="537">
                    </div>
                    <div class="carousel-item">
                    <img src="https://www.larepublica.net/storage/images/2021/05/21/20210521154217.medicos.x2.jpg" class="d-block w-100" alt="..." width="200" height="537">
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
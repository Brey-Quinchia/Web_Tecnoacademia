<?php
    if(isset($_REQUEST['linea'])){
        $nombre_linea = $_REQUEST['linea']; 
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../assets/img/logoSena.png" type="image/x-icon" />
    <!-- Link de esytilo personañlizados -->
    <!-- Link de estilo de Bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/style.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Incripciones 2023</title>
</head>

<body>
    <header>
        <?php include_once('components/navbar.html')?>
    </header>
        <!--* Contenidos principal de la pagina  -->
        <div class="container shadow mt-4 rounded form-layout">
            <h1 class="text-info text-center mb-3">Formulario de Inscripcion</h1>
            <h2 class="text-info text-center mb-3">Es un placer tenerte en la Linea de <?=$nombre_linea?></h2>
            <form class="row g-3 bg-danger p-1">
                <div class="col-md-10 bg-warning">
                    <label for="inputEmail4" class="form-label fs-6">Email</label>
                    <input type="email" class="form-control ms-2" id="inputEmail4" />
                </div>
                <div class="col-md-10">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword4" />
                </div>
            </form>
        </div>
        <div class="form-layout">
            sayd hello
        </div>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    
</body>

</html>
<?php
if (isset($_REQUEST['linea'])) {
    $linea = $_REQUEST['linea'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../assets/img/logoSena.png" type="image/x-icon" />
    <!-- Link de esytilo personalizados -->
    <!-- Link de estilo de Bootstrap -->
    <link rel="stylesheet" href="../assets/style.css"/>
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
        function autoselect(id) {
            document.getElementById(id).selected = 'true';
        }
    </script>
    <script  src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous" defer></script>

    <title>Inscripciones 2023</title>
</head>

<body onload="autoselect('<?= $linea ?>')">
    <header>
        <?php include_once('components/navbar.html') ?>
    </header>
    <!--* Contenidos principal de la pagina  -->
    <div class="container shadow mt-4 mb-4 rounded form-layout">
        <h1 class="text-info text-center mb-3">Formulario de Inscripcion</h1>
        <h2 class="text-info text-center mb-3"></h2>
        <form class="row g-3 bg-light shadow p-1 mx-auto" action="" method="post">
            <!--//*Section A->Upload Format-->
            <?php include_once('components/form/section-a.php')?>
            <!--//*Section B->Basic Data-->
            <?php include_once('components/form/section-b.php')?>
            <!--//*Section C->More Basic Data-->
            <?php include_once('components/form/section-c.php')?>
            <!--//*Section D->Contact Data-->
            <?php include_once('components/form/section-d.php')?>
            <!--//*Section E->Contact Data-->
            <?php include_once('components/form/section-e.php')?>
            <!--//*Section F->Admin Data-->
            <?php include_once('components/form/section-f.php')?>
            
            <!-- //? Falta el boton de inscripcion -->
            <div class="container d-flex justify-content-center mt-2 mb-2">
                <button type="submit" class="btn-inscripcion fs-5">Inscribirse</button>
            </div>
        </form>
    </div>

    </form>
    </div>
    <?php include('components/footer.html')
    ?>
    <script src="../assets/js/bootstrap.bundle.js" defer></script>
</body>

</html>
<?php
if (isset($_REQUEST['linea'])) {
    $linea = $_REQUEST['linea'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../assets/img/logoSena.png" type="image/x-icon" />
    <!-- Link de esytilo personañlizados -->
    <!-- Link de estilo de Bootstrap -->
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
        function autoselect(id) {
            document.getElementById(id).selected = 'true';
        }
    </script>
    <script async src="https://code.jquery.com/jquery-3.6.2.min.js" integrity="sha256-2krYZKh//PcchRtd+H+VyyQoZ/e3EcrkxhM8ycwASPA=" crossorigin="anonymous"></script>

    <title>Incripciones 2023</title>
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
            <div class="col-md-10 bg-light">
                <label for="exampleInputEmail1" class="form-label fs-5">
                    ¿ En que linea de formacion deseas inscribirte?
                </label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="" id="tic">Las TIC</option>
                    <option value="" id="ingenieria">Ingenieria</option>
                    <option value="" id="robotica">Robotica</option>
                    <option value="" id="cbasicas">Ciencias Basicas</option>
                    <option value="" id="biotecnologia">Biotecnologia</option>
                </select>
            </div>
            <!--//? Apartado de carga de Documentos-->
            <div class="container" id="document-upload">
                <hr class="border border-success border-2 opacity-50 mb-0">
                <div>
                    <p class="text-dark text-center fs-3 fw-semibold mt-0">Carga de Documentos</p>
                </div>
                <!--//* Alerta de relevancia al usuario-->
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong class="fs-5">Recuerda que: </strong> Debes realizar la carga de los documentos descritos en la
                    Seccion <a href="beforeStart.php" class="alert-link">Antes de Empezar</a>, sin estos documentos no podras
                    realizar el proceso de inscripción.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!--//?Contenedores de carga de Archivos-->
                <div class="row">
                    <div class=" col-md-4 mb-3">
                        <label for="formFile" class="form-label fs-5">Documento de Identidad del Aprendiz</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class=" col-md-4 mb-3">
                        <label for="formFile" class="form-label fs-5">Documento del Acudiente</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class=" col-md-4 mb-3">
                        <label for="formFile" class="form-label fs-5">Formato 
                            <strong class="fs-5">Nombre del Formato</strong></label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                <div class="row">
                    <div class=" col-md-4 mb-3">
                        <label for="formFile" class="form-label fs-5">Formato
                            <strong class="fs-5">Nombre del Formato</strong>
                        </label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class=" col-md-4 mb-3">
                        <label for="formFile" class="form-label fs-5">Formato
                            <strong class="fs-5">Nombre del Formato</strong>
                        </label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>
                    
                <!--//!Fin del apartado de carga de documentos-->
                <hr class="border border-success border-2 opacity-50 mb-0">
            </div>
            <!--//* Seleccion de Documento -->
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Tipo de documento de Identidad</label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="TIC">Tarjeta de Identidad</option>
                    <option value="">Cedula de Ciudadania</option>
                    <option value="3">Cedula de Extranjeria</option>
                    <option value="3">PEP</option>
                </select>
            </div><!-- //? FIn de pregunta seleccion de documento-->
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">N° de Documento</label>
                <input class='form-control' type="number" name="document-code" id="document-number" placeholder="Document Number">
            </div>
            <!--//? Contenedores de las fechas -->
            <div class="col-md-6">
                <label for="date-venc" class="form-label fs-5">Fecha de Vencimiento Documento</label>
                <input class='form-control ms-2' type="date" name="" id="date-venc">
            </div>
            <div class="col-md-6">
                <label for="date-venc" class="form-label fs-5">Fecha de Expedicion Documento</label>
                <input class='form-control' type="date" name="" id="date-exp">
            </div>
            <!--//? Datos del lugar  de expedicion del documento -->
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Departamento de Expedicion del Documento</label>
                <select class="form-select ms-2" aria-label="departamento-expedicion" name="lst-departamentos" id="lst-departamentos">
                    <option selected>Seleccionar Departamento...</option>
                    <?php
                    require('../model/dataGov.php');
                    ?>
                </select>
            </div>
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Municipio de Expedicion</label>
                <select class="form-select" aria-label="nombre-linea" name="lst-municipios" id="lst-municipios">
                    <option selected>Seleccionar Municipio...</option>
                </select>
                <script><?php include('../assets/js/ajax/selectMunicipio.js')?></script>
            </div>
            <!--//? Nombre y apellidos del aprendiz -->
            <div class="row">
                <label for="" class="form-label fs-5">Nombre del Aprendiz</label>
                <div class="col-md-6">
                    <input class='form-control mt-1' type="text" name="" id="applicant-name" placeholder="Nombre">
                </div>
                <div class="col-md-6 mt-1">
                    <input class='form-control' type="text" name="" id="aplicant-lastname" placeholder="Apellidos">
                </div>
            </div>
            <!-- //? Datos del Nacimiento del aprendiz  -->
            <div class="col-md-12">
                <label for="date-venc" class="form-label fs-5">Fecha de Nacimiento</label>
                <input class='form-control' type="date" name="" id="date-exp">
            </div>
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Departamento de Nacimiento</label>
                <select class="form-select ms-2" aria-label="departamento-expedicion" name="nombre-linea" id="lst-departamentos">
                    <?php
                    require('../model/dataGov.php');
                    ?>
                </select>
            </div>
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Municipio de Nacimiento</label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea" id="lst-municipios">
                    <option selected>Selecciona el Municipio</option>
                </select>
            </div>
            <hr class="border border-danger border-2 opacity-50">
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Genero</label>
                <select class="form-select ms-2" aria-label="departamento-expedicion" name="nombre-linea">
                    <option value="">Masculino</option>
                    <option value="">Femenino</option>
                </select>
            </div>
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Estrato Socioeconimico</label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                    <option value="">6</option>
                </select>
            </div>
            <!-- Grupo Etnico -->
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Grupo Etnico</label>
                <select class="form-select ms-2" aria-label="departamento-expedicion" name="nombre-linea">
                    <option value="">Ninguno</option>
                    <option value="">Negritudes - Afrocolombiano - Palequeros</option>
                    <option value="">Poblacion Indigena</option>
                    <option value="">Raizal</option>
                    <option value="">Pueblo ROM (Gitanos)</option>

                </select>
            </div>
            <!-- Discapacidad -->
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">¿ Tiene alguna Discapacidad ?</label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="">Si</option>
                    <option value="">No</option>
                </select>
            </div>
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">Poblacion Vulnerable</label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="">Here the Name...</option>
                    <option value="">Here the Name...</option>
                    <option value="">Here the Name...</option>
                    <option value="">Here the Name...</option>
                    <option value="">Here the Name...</option>
                    <option value="">Here the Name...</option>
                </select>
            </div>
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">EPS</label>
                <input class='form-control ms-2' type="text" name="document-code" id="" placeholder="Nombre de la EPS">
            </div>
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Tipo de Sangre </label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="">O+</option>
                    <option value="">O-</option>
                    <option value="">A+</option>
                    <option value="">A-</option>
                    <option value="">B+</option>
                    <option value="">B-</option>
                    <option value="">AB+</option>
                    <option value="">AB-</option>
                </select>
            </div>
            <hr class="border border-danger border-2 opacity-50">
            <!--//? Datos de contacto -->
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">Correo Eletronico</label>
                <input class='form-control ms-2' type="email" name="" id="" placeholder="example@example.com">
            </div>
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">Telefono Celular</label>
                <input class='form-control ms-2' type="number" name="" id="" placeholder="Here...">
            </div>
            <div class="col-md-10 mb-2 bg-light">
                <label for="" class="form-label fs-5">Telefono Fijo</label>
                <input class='form-control ms-2' type="number" name="" id="" placeholder="Here...">
            </div>
            <div class="row">
                <label for="" class="form-label fs-5">Direccion de Contacto</label>
                <div class="col-md-6">
                    <input class='form-control mt-1' type="text" name="" id="applicant-name" placeholder="Direccion ">
                </div>
                <div class="col-md-6 mt-1">
                    <input class='form-control' type="text" name="" id="aplicant-lastname" placeholder="Barrio">
                </div>
            </div>
            <hr class="border border-danger border-2 opacity-50">
            <!--//? Datos del Acudiente -->
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">Nombre del Acudiente</label>
                <input class='form-control ms-2' type="email" name="" id="" placeholder="Here...">
            </div>
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">Documento de identidad</label>
                <input class='form-control ms-2' type="email" name="" id="" placeholder="Here...">
            </div>
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">Numero Telefonico de Contacto</label>
                <input class='form-control ms-2' type="number" name="" id="" placeholder="Here...">
            </div>
            <hr class="border border-danger border-2 opacity-50">
            <!-- Datos para la inscripcion en la linea de formacion -->
            <div class="col-md-10 bg-light">
                <label for="" class="form-label fs-5">¿ Has pertenecido a la Tecnoacademia?</label>
                <div class="form-control">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                        <label class="form-check-label" for="gridRadios2">
                            No
                        </label>
                    </div>
                </div>
            </div>
            <!--//? Datos de la institucion Educativa-->
            <div class="col-md-6 bg-light">
                <label for="" class="form-label fs-5">Nombre de la institucion educativa</label>
                <select class="form-select ms-2" aria-label="nombre-linea" name="nombre-linea">
                    <option value="">X</option>
                    <option value="">X</option>
                    <option value="">X</option>
                    <option value="">X</option>
                    <option value="">X</option>
                    <option value="">X</option>
                </select>
            </div>
            <!--//? confirmacion del Formulario -->
            <hr class="border border-success border-2 opacity-50 mb-0">
            <!-- //? Falta el boton de inscripcion -->
            <div class="container d-flex justify-content-center mt-2 mb-2">
                <button type="submit" class="btn-inscripcion fs-5">Inscribirse</button>
            </div>
        </form>
    </div>

    </form>
    </div>
    <script src="../assets/js/bootstrap.bundle.js"></script>
</body>

</html>
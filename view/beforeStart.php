<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="../assets/img/logoSena.png" type="image/x-icon" />
    <!-- Link de esytilo personañlizados -->
    <!-- Link de estilo de Bootstrap -->
    <link rel="stylesheet" href="../assets/style.css" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Before Start</title>
</head>

<body>
    <header>
        <?php include_once('components/navbar.html') ?>
    </header>
    <main>
        <div class="container shadow rounded">
            <div class="container mb-4 mt-2">
                <h1 class="fs-1 text-center mt-4">Antes de comenzar recuerda que:</h1>
                <div class="col-6 mx-auto">
                    <p class="mx-auto fs-5">
                        Para realizar el proceso de Inscripción en la Tecnoacademia Fija Arauca, se hacen necesarios
                        los siguiente documentos y formatos:
                    </p>
                </div>
                    <div class="container-document mx-auto" id="list-document">
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Documento de identidad del alumno a inscribirse</div>
                                    Documento escaneado por ambas caras en formato PDF.
                                </div>
                                <span class="badge bg-danger rounded-pill">PDF</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Documento de identidad del Acudiente</div>
                                    Documento escaneado por ambas caras en formato PDF.
                                </div>
                                <span class="badge bg-danger rounded-pill">PDF</span>
                            </li>
                            <!--//? Link de descarga del formato D1 -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Formato <strong>D1-Clausula De Compromiso</strong></div>
                                    Clausula de Compromiso del aprendiz correctamente diligenciada.
                                    <a href="../download/?doc=D1" class="go-download">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            👉Descarga el formato D1👈  
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </a>
                                </div>
                                <span class="badge bg-danger rounded-pill">PDF</span>
                            </li>
                            <!--//? Link de descarga del formato D1 -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Formato <strong>D2-Información de Registro</strong></div>
                                    Formato de Informacion requerida para registro en plataforma,
                                    correctamente diligenciado.
                                    <a href="../download/?doc=D2" class="go-download">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            👉Descarga el formato D2👈  
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </a>
                                </div>
                                <span class="badge bg-danger rounded-pill">PDF</span>
                            </li>
                            <!--//? Link de descarga del formato D1 -->
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Formato <strong>D3-Tratamiento de Datos</strong></div>
                                    Formato "Tratamiento de datos Menor de edad", correctamente diligenciado.
                                    <a href="../download/?doc=D3" class="go-download">
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            👉Descarga el formato D3👈  
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    </a>
                                </div>
                                <span class="badge bg-danger rounded-pill">PDF</span>
                            </li>
                        </ol>
                    </div>
                    <!--//!Fin del contenedor de listado de documentos -->
                
            </div>
        </div>
    </main>
    <!--//* Espacio reservado para el Footer-->
    <?php //include('components/footer.html')
    ?>
    <script src="../assets/js/bootstrap.bundle.js"></script>

</body>

</html>
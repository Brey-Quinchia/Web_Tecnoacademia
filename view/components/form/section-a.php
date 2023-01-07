<?php
//* Comment: 
//? Apratado de seleccion de linea y carga de formatos
?>
<div class="container section" id="section-a">
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
                    <strong class="fs-5">(D1)Clausula De Compromiso</strong></label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <div class="row">
            <div class=" col-md-4 mb-3">
                <label for="formFile" class="form-label fs-5">Formato
                    <strong class="fs-5">(D2)Informacion De Registro En Plataforma</strong>
                </label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class=" col-md-4 mb-3">
                <label for="formFile" class="form-label fs-5">Formato
                    <strong class="fs-5">(D3)Tratamiento de Datos</strong>
                </label>
                <input class="form-control" type="file" id="formFile">
            </div>
        </div>
        <!--//!Fin del apartado de carga de documentos-->
        <hr class="border border-success border-2 opacity-50 mb-0">
    </div>
</div>
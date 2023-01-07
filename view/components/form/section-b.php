<?php
//? Description:
//* Apartado de datos basicos del aprendiz
?>
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
        <script src="../assets/js/ajax/selectMunicipio.js"></script>
    </div>

    <!--//? Nombre y apellidos del aprendiz -->
    <div class="row">
        <label for="" class="form-label fs-5">Nombre del Aprendiz</label>
        <!-- Nombre del aprendiz  -->
        <div class="col-md-6">
            <input class='form-control mt-1' type="text" name="" id="applicant-name" placeholder="Nombre">
        </div>
        <!-- Apellidos del aprendiz -->
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
        <select class="form-select ms-2" aria-label="departamento-expedicion" name="lst-departamentos-nac" id="lst-departamentos-nac">
            <option selected>Seleccionar Departamento...</option>
            <?php
            require('../model/dataGov.php');
            ?>
        </select>
    </div>

    <div class="col-md-6 bg-light">
        <label for="" class="form-label fs-5">Municipio de Nacimiento</label>
        <select class="form-select" aria-label="nombre-linea" name="lst-municipios-nac" id="lst-municipios-nac">
            <option selected>Seleccionar Municipio...</option>
        </select>
        <script src="../assets/js/ajax/selectMunicipioNac.js"></script>
    </div>
    <hr class="border border-danger border-2 opacity-50">

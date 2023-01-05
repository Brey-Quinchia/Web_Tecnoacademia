<?php
if(!isset($_GET['doc'])){
    header('Location: ../view/beforeStart.php');
}else{
    $document = $_GET['doc']; 
}
switch ($document) {
    case 'D1':
        $rutaArchivo = __DIR__ . "../files/format/(D1)_Clausula_De_Compromiso.pdf";
        break;
    case 'D2':
        $rutaArchivo = __DIR__ . "../files/format/(D2)_Informacion_De_Registro_En_Plataforma.pdf";
        break;
    case 'D3':
        $rutaArchivo = __DIR__ . "../files/format/(D3)_Formato_Tratamiento_De_Datos.pdf";
        break;
    case 'D4':
        $rutaArchivo = __DIR__ . "../files/image.png";
        break;
    default: 
        header('Location: ../view/beforeStart.php');
}
# Pon su ruta absoluta, no importa qué tipo sea
//&$rutaArchivo = __DIR__ . "../doc/(D1)-Clausula De Compromiso.pdf";

# Obtener nombre sin ruta completa, únicamente para sugerirlo al guardar
$nombreArchivo = basename($rutaArchivo);

# Algunos encabezados que son justamente los que fuerzan la descarga
//header ("Content-Type: application/octet-stream");
header('Content-Type: application/pdf');
file_put_contents($nombreArchivo, file_get_contents($rutaArchivo));
//header("Content-Transfer-Encoding: Binary");
# Leer el archivo y sacarlo al navegador
//readfile($rutaArchivo);
?>
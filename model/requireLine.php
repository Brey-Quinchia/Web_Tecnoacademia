<?php
    if(isset($_REQUEST['linea'])){
        $linea = $_REQUEST['linea'];
        switch ($linea) {
            case 'tic':
                $linea = 'tic';
                break;
            case 'robotica':
                $linea = 'robotica';
                break;
            case 'biotecnologia':
                $linea = 'biotecnologia';
                break;
            case 'cbasicas':
                $linea = 'cbasicas';
                break;
            case 'ingenieria':
                $linea = 'ingenieria';
                break;
            default:
                $linea = 'tic';
                break;
        }
    }else{
        $linea = 'tic';
    }
?>
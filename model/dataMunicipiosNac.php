<?php
//header('Content-Type: text/html; charset=UTF-8');

//COMPROBAMOS QUE LLEGUE EL DATO DEL SELECT
if(isset($_POST['departamento'])){

    //GUARDAMOS EL DATO RECIBIDO EN UNA VARIABLE
    $TMPpais = $_POST['departamento'];
    //CONDICIONAMOS LA CONSULTA CON LA VARIABLE RECIBIDA $PAIS
    $pais = $TMPpais;
    //DECLARAMOS UN ARREGLO PARA ALMACENAR LA DATA DE LA CONSULTA EN EL
    
    $data = array(['A'=>'JJ'],['B'=>'dsds']);
    //RECORREMOS LAS FILAS  E INSERTAMOS EN EL ARRAY
    //VERIFICAMOS QUE EL ARRAY NO ESTE VACIO
    //SI NO LLEGA NINGUN DATO
        $url_request = 'https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=';
        $condition = '&$select=municipio';
        $url_query = $url_request.$pais.$condition;
        $json = @file_get_contents($url_query);
        $mydata = json_decode($json, true);
        //? Municipios del departamento
        $i = 0;
        foreach($mydata as $municipio2):
    ?>
    <option value="<?=$municipio2['municipio']?>"><?=$municipio2['municipio']?></option>
    <?php
    endforeach;
    ?>
<?php
}else{
    echo "No llego ningun dato";
}
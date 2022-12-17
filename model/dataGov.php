<?php
        $url_request = 'https://www.datos.gov.co/resource/xdk5-pm3f.json?departamento=';
        $json = @file_get_contents('https://www.datos.gov.co/resource/xdk5-pm3f.json?$select=departamento&$group=departamento');
        $mydata = json_decode($json, true);
        //? Municipios del departamento
        $i = 0;
        foreach ($mydata as $value) :
        ?>
            <option value="<?= ($mydata[$i]['departamento']) ?>"><?= ($mydata[$i]['departamento']) ?></option>
        <?php
            $i++;
        endforeach;
?>
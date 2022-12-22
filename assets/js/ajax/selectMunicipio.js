    //DETECTAMOS QUE EL DOM SE CARGUE COMPLETAMENTE
    $(document).ready(function() {
        //ESCUCHAMOS EL EVENTO DE CAMBIO EN EL PRIMER SELECT
        $("#lst-departamentos").on('change', function() {
    
            //CON ESTO RESETEAMOS EL SELECT DE PROVICNCIAS AL CAMBIAR LA SELECCION DE PAIS(PRIMER SELECT)
            $('#lst-municipios').find('option').remove().end().append('<option value="whatever">...</option>').val('whatever');
    
            //OBTENEMOS LA OPCION SELECCIONADA DEL PRIMER SELECT
            $("#lst-departamentos option:selected").each(function() {
            //ALAMACENAMOS EN UNA VARIABLE EL VALUE DE DICHA SELECCION
            var withoutcode = $(this).val();
            var pais = encodeURI(withoutcode);
            //HACEMOS LA PETICION ENVIANDO DICHO VALUE
            $.ajax({
                data: {
                    pais: pais
                },
                url: '../model/dataMunicipios.php',
                type: 'post',

                //PINTAMOS LA DATA DEVUELTA POR PHP EN LISTA2
                success: function(response) {
                $("#lst-municipios").html(response);
                },
                error: function() {
                alert("error")
                }
            });
            });
        })
        });
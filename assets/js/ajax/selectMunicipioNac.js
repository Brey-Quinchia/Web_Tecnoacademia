    //DETECTAMOS QUE EL DOM SE CARGUE COMPLETAMENTE
    $(document).ready(function() {
        //ESCUCHAMOS EL EVENTO DE CAMBIO EN EL PRIMER SELECT
        $("#lst-departamentos-nac").on('change', function() {
    
            //CON ESTO RESETEAMOS EL SELECT DE PROVICNCIAS AL CAMBIAR LA SELECCION DE PAIS(PRIMER SELECT)
            $('#lst-municipios-nac').find('option').remove().end().append('<option value="whatever">...</option>').val('whatever');
    
            //OBTENEMOS LA OPCION SELECCIONADA DEL PRIMER SELECT
            $("#lst-departamentos option:selected").each(function() {
            //ALAMACENAMOS EN UNA VARIABLE EL VALUE DE DICHA SELECCION
            var withoutcode2 = $(this).val();
            var departamentoNac = encodeURI(withoutcode2);
            //HACEMOS LA PETICION ENVIANDO DICHO VALUE
            $.ajax({
                data: {
                    departamento: departamentoNac
                },
                url: '../model/dataMunicipiosNac.php',
                type: 'post',

                //PINTAMOS LA DATA DEVUELTA POR PHP EN LISTA2
                success: function(response) {
                $("#lst-municipios-nac").html(response);
                },
                error: function() {
                alert("error")
                }
            });
            });
        })
        });
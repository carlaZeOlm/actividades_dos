<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Select</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            var indice = 0;

            // Manejar el evento del botón
            $("#cargarDatosBtn").click(function(){
                cargarOpcion(indice);
                indice++;
            });

            function cargarOpcion(indice) {
                // Realizar una solicitud Ajax para obtener una opción del archivo de texto
                $.ajax({
                    url: 'select_f.php',
                    type: 'POST',
                    dataType: 'json',
                    data: { indice: indice },
                    success: function(data){
                        if (data.opcion !== '') {
                            // Agregar la nueva opción al select
                            $('#opcionesSelect').append('<option value="' + data.indice + '">' + data.opcion + '</option>');
                        } else {
                            // Mostrar alerta si no hay más opciones
                            alert('Ya no tengo opciones desponibles :(.');
                        }
                    },
                    error: function(error){
                        console.log('Error al cargar la opción: ' + error.responseText);
                    }
                });
            }
        });
    </script>
</head>
<body>
  <br> <label>Select con frutas</label></br>

    <select id="opcionesSelect"></select>

    <button id="cargarDatosBtn">Rellenar</button>
</body>
</html>




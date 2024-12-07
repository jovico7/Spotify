prueba('')

function prueba(valor) {
    var resultado = document.getElementById('resultado');

    // Crear el FormData con los datos necesarios
    var formdata = new FormData();
    formdata.append('busqueda', valor);

    // Obtener el token CSRF de una meta tag
    var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    formdata.append('_token', csrfToken);

    // Crear el objeto XMLHttpRequest
    var ajax = new XMLHttpRequest();
    ajax.open('GET', '/api/artistas', true);

    // Función de callback para cuando la solicitud se completa
    ajax.onload = function() {
        if (ajax.status === 200) {
            var json = JSON.parse(ajax.responseText);
            var tabla = "<table><tbody>"; // Abrir la tabla y el tbody

            json.forEach(function(item) {
                tabla += "<tr><td>" + item.id_artist + "</td>";
                tabla += "<td>" + item.artist_name + "</td></tr>";
            });

            tabla += "</tbody></table>";

            // Insertar el contenido en el contenedor 'resultado'
            resultado.innerHTML = tabla;
        } else {
            // Mostrar un mensaje de error si el estado no es 200
            resultado.innerText = "Error: " + ajax.status + " - " + ajax.statusText;
        }
    };

    // Manejar posibles errores de red
    ajax.onerror = function() {
        resultado.innerText = "Error de conexión";
    };

    // Enviar la solicitud con el FormData
    ajax.send(formdata);
}
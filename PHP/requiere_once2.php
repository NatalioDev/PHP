    <?php
    // Definimos una función para mostrar el encabezado de la página con un estilo específico.
        function pageHeader($title){
            // Utilizamos una etiqueta <h1> con estilos en línea para definir el título del encabezado.
            echo "<h1 style=\"width:100%;background:#ffff00;text-aling:center\">$title</h1>";
        }

        // Definimos una función para mostrar el pie de página con un estilo específico.
        function pageFooter($title){
            // Utilizamos una etiqueta <p> con estilos en línea para definir el título del pie de página.
            echo "<p style=\"width:100%;background:#cccccc;text-aling:center\">$title</p>";
        }

        // Definimos una función para establecer una conexión a la base de datos.
        function returnConnection(){
            // Utilizamos la función mysqli_connect para conectarnos a la base de datos.
        // Si hay algún problema en la conexión, mostramos un mensaje de error y detenemos la ejecución.
            $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Problems in connction");

            // Devolvemos el objeto de conexión para ser utilizado en otras partes del código.
            return $connection;
        }
    ?>

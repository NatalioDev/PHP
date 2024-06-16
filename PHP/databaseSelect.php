<html>

<head>
    <title>Database Select</title>
</head>

<body>
  <?php
    // Nos conectamos a la base de datos
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Creamos un registro para seleccionar los datos de la base de datos students
    $register = mysqli_query($connection, "select code,name,email,courseCode from students") or die ("Problems in Select: ". mysqli_error($connection));
    
    // Creamos una condicional para que recorra todos los datos de nuestra DB
    while ($reg = mysqli_fetch_array($register)){
        echo "Code: " . $reg['code'] . "<br>"; //Mostramos el código del studiante
        echo "Name: " . $reg['name'] . "<br>"; // Mostramos el nombre del studiante.
        echo "Email: " . $reg['email'] . "<br>"; // Mostramos el email del estudiante.

        // Mostramos el curso del estudiante
        echo "Course: ";
        // Condicional para que muestre el nombre del curso del estudiante segun su código
        switch($reg['courseCode']){
            case 1:
                echo "PHP";
                break;
            case 2:
                echo "ASP";
                break;
            case 3:
                echo "JSP";
                break;
        }
        echo "<br>";
        echo "<hr>";
    }

    // Creamos otro registro para obtener los datos de la DB de Course
    $register2 = mysqli_query($connection, "select code,courseName from course") or die ("Problems in Select: ". mysqli_error($connection));

    // Creamos una condicional para que recorra todos los datos de la DB y los muestre por pantalla
    while ($reg2 = mysqli_fetch_array($register2)) {
        echo "Code: " . $reg2['code'] . "<br>"; // Muestra el código del curso
        echo "Course Name: " . $reg2['courseName'] . "<br>"; // Muestra el nombre 
        echo "<hr>";
    }

    // Creamos otro registro de la DB Students y le pasamos el email para
    $register3 = mysqli_query($connection, "select code,name,courseCode from students where email='$_REQUEST[email]'") or die ("Problems in Select: " . mysqli_error($connection));

    // Condicional que recorre los datos del registro y muestra por pantalla los datos
    if ($reg3 = mysqli_fetch_array($register3)) {
        echo "Name: " . $reg3['name'] . "<br>"; // Muestra el nombre del estudiante 
        echo "Course: "; // Muestra el curso
        
        // Condicional que muestra el nombre del curso que tenga el estudiante.
        switch ($reg3['courseCode']) {
            case 1:
                echo "PHP";
                break;
            case 2:
                echo "ASP";
                break;
            case 3:
                echo "JSP";
                break;
        }
    }else{
        echo "There is no student with that email."; // Muestra un mensaje si el estudiante no existe con el email ingresado.
    }

    // Creamos otro registro de la DB Students y le pasamos como parametro el nombre 
    $register4 = mysqli_query($connection, "select code,name,courseCode from students where name='$_REQUEST[name]'") or die ("Problems in Select: " . mysqli_error($connection));

    echo "<br>";
    echo "<hr>";

    // Creamos una variable de cantidad 
    $cant = 0;

    // Condicional que recorre los datos del registro de la DB
    while ($reg4 = mysqli_fetch_array($register4)) {
        echo "Name: " . $reg4['name'] . "<br>"; // Muestra el nombre
        echo "Course:"; // Muestra el nombre del curso

        // Condicional que muestra el nombre del curso segun el estudiante 
        switch ($reg4['courseCode']) {
            case 1:
                echo "PHP";
                break;
            case 2:
                echo "ASP";
                break;
            case 3:
                echo "JSP";
                break;
        }
        // Sumamos mas valor a la variable
        $cant++;
        echo "<hr>";
    }

    // Condicional que muestra un mensaje si no encuentra al estudiante por su nombre
    if ($cant == 0) {
        echo "There are no students with that name";
    }

    // Cerramos la conexión.
    mysqli_close(($connection));
  ?>
</body>

</html>
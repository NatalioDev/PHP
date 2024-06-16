<html>

<head>
    <title>Database Insert Form</title>
</head>

<body>
    <!-- Title -->
    <h1>Insert Form</h1>

    <!-- Formulario para crear un nuevo estudiante en la DB Students -->
    <form action="databaseInsert.php" method="post">
        <!-- Input para ingresar el nombre -->
        Enter name:
        <input type="text" name="name">
        <br>
        <!-- Input para ingresar el email -->
        Enter email:
        <input type="text" name="email">
        <br>
        <!-- Select para los cursos -->
        Select course:
        <select name="codeCourse">
  <?php
    // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Creamos el registro de la DB Course
    $register= mysqli_query($connection, "select code,courseName from course") or die ("Problems in select:" . mysqli_error($connection));

    // Condicional que recorre el registro
    while($reg = mysqli_fetch_array($register)){
        echo "<option value=\"$reg[code]\">$reg[courseName]</option>"; // Muestra los nombres de los cursos buscandolos por su código en la DB Course
    }
  ?>
    </select>
    <br>
    <!-- Botón para registrarlo -->
    <input type="submit" value="Register">
    </form>
</body>

</html>
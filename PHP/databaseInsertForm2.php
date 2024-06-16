<html>

<head>
    <title>Database Insert Form</title>
</head>

<body>
  <!-- Title -->
  <h1>Insert Form 2</h1>
  <!-- Formulario para agregar un nuevo estudiante -->
    <form action="databaseInsert.php" method="post">
        <!-- Input para ingresar el nombre  -->
        Enter name:
        <input type="text" name="name">
        <br>
        <!-- Input para agregar el email -->
        Enter email:
        <input type="text" name="email">
        <br>
        <!-- Select Radio para los cursos -->
        Select course:
        <br>
  <?php
  // Nos conectamos a la DB
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    // Creamos el registro de la DB Course
    $register= mysqli_query($connection, "select code,courseName from course") or die ("Problems in select:" . mysqli_error($connection));

    // Condicional que recorre el registro
    while($reg = mysqli_fetch_array($register)){
    // Mostra el nombre de los cursos por su coódigo en la DB Course
    echo "<input type='radio' name='codeCourse' value=\"$reg[code]\">";
    echo "$reg[courseName]"; // Mostramos el nombre del curso
    echo "<br>";
    }
  ?>
    </select>
    <br>
    <!-- Botón de registro -->
    <input type="submit" value="Register">
    </form>
</body>

</html>
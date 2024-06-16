<html>

<head>
    <title>Database Delete Form</title>
</head>

<body>
  <!-- Title -->
  <h1>Delete</h1>
  <!-- Formulario para eliminar datos de la DB -->
  <form action="databaseDelete.php" method="post">
    <!-- Input para que ingrese el email del estudiante que quiere eliminar -->
    Enter the student's email to consult:
    <input type="text" name="email">
    <br>
    <hr>

    <!-- Input para que ingrese el nombre del estudiante que quiere eliminar -->
    Enter the course name:
    <input type="text" name="nameCourse">
    <br>
    <hr>
    <!-- Botón para que busque y elimine los datos ingresados -->
    <input type="submit" value="Search and Delete">
  </form>
</body>

</html>
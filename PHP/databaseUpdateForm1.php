<html>

<head>
    <title>Update Form 1</title>
</head>

<body>
  <!-- Title -->
  <h1>Update Form 1</h1>
  <!-- Formulario para buscar el estudiante -->
  <form action="databaseUpdateForm2.php" method="post">
    <!-- Input para ingresar el email -->
    Enter the student's email:
    <input type="text" name="email">
    <br>
    <hr>
    <!-- Input para ingresar el código del curso -->
    Enter the course code:
    <input type="text" name="codeCourse">
    <br>
    <!-- Botón para buscar el estudiante con los datos ingresados -->
    <input type="submit" value="Search">
  </form>
</body>

</html>
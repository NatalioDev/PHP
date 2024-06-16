<html>

<head>
    <title>Database Form</title>
</head>

<body>
  <!-- Title -->
  <h1>Registration of Students</h1>
  <!-- Formulario para crear un nuevo estudiante en la base de datos -->
  <form action="database.php" method="post">
    Enter your name:
    <input type="text" name="name" >
    <br>
    Enter your email:
    <input type="text" name="email">
    
    <br>
    <!-- Select para que elegir el curso para agregarlo a la base de datos -->
    Select Course:
    <select name="courseCode" >
      <option value="1">PHP</option>
      <option value="2">ASP</option>
      <option value="3">JSP</option>
    </select>
    <br>
    <!-- Input para crear un nuevo curso en la base de datos -->
    Enter name of course:
    <input type="text" name="nameCourse">
    <br>
    <!-- Registrar -->
    <input type="submit" value="Register">
    <br>
  </form>
</body>

</html>
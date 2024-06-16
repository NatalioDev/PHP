<html>

<head>
    <title>Database Form</title>
</head>

<body>
  <h1>Registration of Students</h1>
  <form action="database.php" method="post">
    Enter your name:
    <input type="text" name="name" >
    <br>
    Enter your email:
    <input type="text" name="email">
    <br>
    Select Course:
    <select name="courseCode" >
      <option value="1">PHP</option>
      <option value="2">ASP</option>
      <option value="3">JSP</option>
    </select>
    <br>
    Enter name of course:
    <input type="text" name="nameCourse">
    <br>
    <input type="submit" value="Register">
    <br>
  </form>
</body>

</html>
<html>

<head>
    <title>Database Insert Form</title>
</head>

<body>

    <form action="databaseInsert.php" method="post">
        Enter name:
        <input type="text" name="name">
        <br>
        Enter email:
        <input type="text" name="email">
        <br>
        Select course:
        <br>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    $register= mysqli_query($connection, "select code,courseName from course") or die ("Problems in select:" . mysqli_error($connection));

    while($reg = mysqli_fetch_array($register)){
    
    echo "<input type='radio' name='codeCourse' value=\"$reg[code]\">";
    echo "$reg[courseName]";
    echo "<br>";
    }
  ?>
    </select>
    <br>
    <input type="submit" value="Register">
    </form>
</body>

</html>
<html>

<head>
    <title>Update Form 2</title>
</head>

<body>
    <?php
        $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");
        
        // Obtener la info del estudiante
        $register = mysqli_query($connection, "select * from students where email='$_REQUEST[email]'") or die ("Problems in select: " . mysqli_error($connection));
        
        $studentsExists= false;
        
        if ($reg = mysqli_fetch_array($register)) {
            $studentsExists = true;
        }

        // Obtener la informacion del curso

        $register2 = mysqli_query($connection, "select * from course where code='$_REQUEST[codeCourse]'") or die ("Problems in select: " . mysqli_error($connection));

        $courseExists = false;

        if ($reg2 = mysqli_fetch_array($register2)) {
            $courseExists = true;
        }
    ?>

  <form action="databaseUpdate.php" method="post">
    <?php if ($studentsExists) { ?>
    <!-- Información del estudiante -->
    Enter new email:
    <input type="text" name="emailNew" value="<?php echo $reg['email']?>">
    <br>
    <input type="hidden" name="emailOld" value="<?php echo $reg['email']?>">
    <?php } else {
        echo "<p>No students was found with said email.</p>";
    } 
    
    if ($courseExists) {
    ?>
    <br>
    <hr>
        <!-- Información del curso -->
        Enter the new course name:
        <input type="text" name="nameNew" value="<?php echo $reg2['courseName']?>">
        <br>
        <input type="hidden" name="nameOld" value="<?php echo $reg2['courseName']?>">
    <?php
    } else {
        echo "No course found with this code.";
    }

    if ($studentsExists || $courseExists) {
?>
    <br>
    <hr>
    <input type="submit" value="Modify">
    <?php
    }
    ?>
</form>
</body>

</html>
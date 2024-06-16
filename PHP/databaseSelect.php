<html>

<head>
    <title>Database Select</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Connection issues.");

    $register = mysqli_query($connection, "select code,name,email,courseCode from students") or die ("Problems in Select: ". mysqli_error($connection));
    
    while ($reg = mysqli_fetch_array($register)){
        echo "Code: " . $reg['code'] . "<br>";
        echo "Name: " . $reg['name'] . "<br>";
        echo "Email: " . $reg['email'] . "<br>";

        echo "Course: ";
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

    $register2 = mysqli_query($connection, "select code,courseName from course") or die ("Problems in Select: ". mysqli_error($connection));

    while ($reg2 = mysqli_fetch_array($register2)) {
        echo "Code: " . $reg2['code'] . "<br>";
        echo "Course Name: " . $reg2['courseName'] . "<br>";
        echo "<hr>";
    }

    $register3 = mysqli_query($connection, "select code,name,courseCode from students where email='$_REQUEST[email]'") or die ("Problems in Select: " . mysqli_error($connection));

    if ($reg3 = mysqli_fetch_array($register3)) {
        echo "Name: " . $reg3['name'] . "<br>";
        echo "Course: ";
        
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
        echo "There is no student with that email.";
    }

    $register4 = mysqli_query($connection, "select code,name,courseCode from students where name='$_REQUEST[name]'") or die ("Problems in Select: " . mysqli_error($connection));

    echo "<br>";
    echo "<hr>";

    $cant = 0;

    while ($reg4 = mysqli_fetch_array($register4)) {
        echo "Name: " . $reg4['name'] . "<br>";
        echo "Course:";

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
        $cant++;
        echo "<hr>";
    }

    if ($cant == 0) {
        echo "There are no students with that name";
    }

    mysqli_close(($connection));
  ?>
</body>

</html>
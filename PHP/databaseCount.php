<html>

<head>
    <title>Database Count</title>
</head>

<body>
  <?php
    $connection = mysqli_connect("localhost", "root", "", "base1") or die ("Problems in connection");

    $register = mysqli_query($connection, "select count(*) as amount from students") or die ("Problems in select: " . mysqli_error($connection));

    $reg = mysqli_fetch_array($register);

    echo "The number of enrolled students is: " . $reg['amount'];
  ?>

</body>

</html>
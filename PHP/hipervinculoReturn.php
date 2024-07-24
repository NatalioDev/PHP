<html>

<head>
  <title>Hipervínculos - Return </title>
</head>

<body>
  <?php
    echo "<h3>$_GET[table] multiplication table listing:</h3>";

    for ($f=0; $f <= 10 ; $f++) { 
        $value = $f * $_GET['table'];
        echo $_GET['table'] . "x" . $f . "= " . $value . "<br>";
    };
  ?>
</body>

</html>
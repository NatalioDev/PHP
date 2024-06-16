<html>

<head></head>

<body>
  <?php
  $name[] = "juan";
  $name[] = "pedro";
  $name[] = "ana";

  for ($f=0; $f < count($name) ; $f++) { 
    echo $name[$f];
    echo "<br>";
  }

  echo"<br>";

  $days = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");

  foreach ($days as $day){
    echo $day;
    echo "<br>";
  };
  echo "<br>";

  echo"First day: $days[0]";
  echo "<br>";
  echo"Last day: $days[6]";

  echo "<br>";

  // Associative Vectors
  echo "<br>";
  echo "Associative Vectors: <br>";

  $article = array(
    'code' => 1,
    'description' => 'apple',
    'price' => 30.25
  );

  foreach ($article as $key => $value) {
    echo 'For key: '. $key . " stores the value: " . $value;
    echo "<br>"; 
  }

  // Form Vectors

  echo "<br><br>";

  $sum = 0;
  foreach ($_REQUEST as $key => $value) {
    echo "Value: " . $value;
    echo "<br>";

    $sum = $sum + $value;
  };

  echo "The total of all values is: " . $sum;

  // Store in an associative vector the numbre of days each month of the year has. Then access it by name as a subscript.

  echo "<br>";
  echo "<br>";
  echo "Number of days in the months: <br>";


  $month['January'] = 31;
  $month['February'] = 29;
  $month['March'] = 31;
  $month['April'] = 30;
  $month['May'] = 31;
  $month['June'] = 30;
  $month['July'] = 31;
  $month['August'] = 31;
  $month['September'] = 30;
  $month['October'] = 31;
  $month['November'] = 30;
  $month['December'] = 31;

  echo "January has: " . $month['January'] . "<br>";
  echo "August has: " . $month['August'] . "<br>";
  echo "September has: " . $month['September'] . "<br>";

  // User access codes

  echo "<br>";

  echo "User access codes: <br>";

  $user['nata']=25;
  $user['charly']=29;
  $user['marcos']=27;
  $user['nico']=24;
  $user['german']=26;

  echo "Nata is password is: " . $user['nata'] . "<br>";





  ?>
</body>

</html>
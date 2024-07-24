<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function - Date</title>
</head>
<body>
    <?php
    // Los caracteres de formato utilizados en las dos llamadas de la función date son:
    //     d día del mes con dos dígitos "01" al "31"
    //     m mes con dos dígitos "01" al "12"
    //     Y año con cuatro dígitos
    //     Para la hora, los caracteres que serán sustituidos son:
    //     H hora con dos dígitos "00" a "23"
    //     i minutos con dos dígitos "00" a "59"
    //     s segundos con dos dígitos "00" a "59"
        
    //     Los otros caracteres que disponemos al llamar a la función date, son retornados sin cambios, en este caso la barra y los dos puntos.
    $date = date("d/m/Y");
    echo "<h4>Today's date is: $date</h4>";

    $hour = date("H:i:s");
    echo "<h4>The current time is: $hour</h4><hr>";

    ?>

    <form action="functionDate2.php" method="post">
        <h3>Enter your name: <input type="text" name="name"></h3>
        <h4>Complaints:</h4>
        <textarea name="complaints" rows="10" cols="40"></textarea>
        <br>
        <input type="submit" value="Register">
    </form>

    <a href="functionDate3.php">Registered Complaints</a>
</body>
</html>

<!-- Los caracteres de formato utilizados en las dos llamadas de la función date son:
d día del mes con dos dígitos "01" al "31"
m mes con dos dígitos "01" al "12"
Y año con cuatro dígitos
Para la hora, los caracteres que serán sustituidos son:
H hora con dos dígitos "00" a "23"
i minutos con dos dígitos "00" a "59"
s segundos con dos dígitos "00" a "59"

Los otros caracteres que disponemos al llamar a la función date, son retornados sin cambios, en este caso la barra y los dos puntos. -->
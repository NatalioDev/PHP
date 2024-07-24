<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function - Checkdate</title>
</head>
<body>
    <!-- Si disponemos en forma separada del día, mes y año hay, una función que nos indica si se trata de una fecha válida:

    boolean checkdate ( mes, dia, año)

    Retorna verdadero si la fecha es válida, falso en caso contrario. -->
    <form action="functionCheckdate2.php" method="post">
        Enter a Date (dd/mm/aaaa):
        <input type="text" name="day" size="2">
        <input type="text" name="month" size="2">
        <input type="text" name="year" size="4">
        <br>
        <input type="submit" value="Validate">
    </form>
</body>
</html>
<?php
    // Como podemos observar, la creación de la cookie se hace llamando a la función setcookie:
    if ($_REQUEST['radio'] == "red") {
        setcookie("color", "#ff0000", time() + 60 * 60 * 24 * 365, "/");
    }elseif ($_REQUEST['radio'] == "green") {
        setcookie("color", "#00ff00", time() + 60 * 60 * 24 * 365, "/");
    }elseif ($_REQUEST['radio'] == "blue") {
        setcookie("color", "#0000ff", time() + 60 * 60 * 24 * 365, "/");
    }else{
        setcookie("color", "#ffffff", time() + 60 * 60 * 24 * 365, "/");
    }
    setcookie("user", $_REQUEST['name'], time() + 60 * 60 * 24 * 365, "/");
?>
<html>

<head>
    <title>Cookie - Return</title>
</head>

<body>
    <h4>The cookie was created</h4>

    <a href="cookie.php">Return to page</a>
</body>

</html>
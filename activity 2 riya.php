<!DOCTYPE html>
<html>
<head>
    <title>PHP Arithmetic Operations</title>
</head>
<body>
    <h1>Arithmetic Operations</h1>
    <?php
    $var1 = 3;
    $var2 = 2;
    $var3;

    /* Arithmetic examples */
    echo("Variable 1 is $var1 <br>");
    echo("Variable 2 is $var2 <br>");

    $var3 = $var1 + $var2;
    echo("The result of addition is $var3 <br>");

    $var3 = $var1 - $var2;
    echo("The result of subtraction is $var3 <br>");

    $var3 = $var1 * $var2;
    echo("The result of multiplication is $var3 <br>");

    $var3 = $var1 / $var2;
    echo("The result of division is $var3 <br>");
    ?>
</body>
</html>
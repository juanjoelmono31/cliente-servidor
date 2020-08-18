<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi calculadora php</title>
</head>

<body>


    <span>Soy Juan Jose Gonzalez</span><br>
    <h3>Calculadora</h3>

    <form><br>

        <input type="text" name="n1">
        <select name="op">

            <option value="sumar">sumar</option>
            <option value="restar">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>

        </select>
        <input type="text" name="n2">
        <input type="submit">

    </form>

    <?php

    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $op = $_GET["op"];

    $resultado;

    if ($op == "sumar") {
        $resultado = ($n1 + $n2);
    } else if ($op == "restar") {
        $resultado = ($n1 - $n2);
    } else if ($op == "multiplicar") {
        $resultado = ($n1 * $n2);
    } else {
        $resultado = ($n1 / $n2);
    }

    echo "<br>";



    $directory = ".css/img/feliz.png/";

    if ($resultado > 0) {
        echo "el resultado es:" . $resultado;
        echo '<img class="" src="./img/feliz.png" width="200" height="200">';
    } else if ($resultado < 0) {
        echo "el resultado es:" . $resultado;
        echo '<img class="" src="./img/triste.jpg" width="200" height="200">';
    } else {
        $resultado == 0;
    }

    ?>
</body>

</html>
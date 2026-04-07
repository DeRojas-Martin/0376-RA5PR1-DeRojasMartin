<?php
$numero = 7;
if (isset($_GET["numero"])) {
    $numero = $_GET["numero"];
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de multiplicar</title>
</head>
<body>

<h1>Taula del <?php echo $numero; ?></h1>
<form action="index.php" method="get">
    <label>Escriu un número:</label>
    <input type="number" name="numero">
    <button type="submit">Mostrar taula</button>
</form>

<?php
if ($numero < 1 || $numero > 12) {
    echo "<p>Error: número incorrecte</p>";
} else {
    echo "<table border='1'>";

    for ($i = 1; $i <= 10; $i++) {

        if ($i % 2 == 0) {
            echo "<tr style='background-color: lightgray'>";
        } else {
            echo "<tr>";
        }

        echo "<td>" . $numero . " x " . $i . "</td>";
        echo "<td>" . ($numero * $i) . "</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
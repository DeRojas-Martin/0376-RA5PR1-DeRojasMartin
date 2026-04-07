<?php
$numero = 7;
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Taula de multiplicar</title>
</head>
<body>

<h1>Taula del <?php echo $numero; ?></h1>

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
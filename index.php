<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Web</title>
</head>
<body>
    <h1>Calculadora Web</h1>

    <form action="calculadora.php" method="post">
        <input type="number" name="numero1" required>
        <select name="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>
        <input type="number" name="numero2" required>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero1 = floatval($_POST["numero1"]);
        $operacion = $_POST["operacion"];
        $numero2 = floatval($_POST["numero2"]);

        switch ($operacion) {
            case "suma":
                $resultado = $numero1 + $numero2;
                break;
            case "resta":
                $resultado = $numero1 - $numero2;
                break;
            case "multiplicacion":
                $resultado = $numero1 * $numero2;
                break;
            case "division":
                if ($numero2 == 0) {
                    $resultado = "Error: No se puede dividir por cero.";
                } else {
                    $resultado = $numero1 / $numero2;
                }
                break;
            default:
                $resultado = "Operación no válida";
        }
        echo "<p>Resultado: $resultado</p>";
    }
    ?>

</body>
</html>
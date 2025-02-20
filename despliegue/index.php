<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>

<body>
    <form action="" method="post">
        <label for="num1">Número 1</label>
        <input type="number" name="num1" id="num1">
        <br>

        <label for="num2">Número 2</label>
        <input type="number" name="num2" id="num2">
        <br>

        <label for="operacion">Operación:</label>
        <select name="operacion" id="operacion" class="caja">
            <option value="+">Suma +</option>
            <option value="-">Resta -</option>
            <option value="*">Multiplicación *</option>
            <option value="/">División /</option>
        </select><br>

        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php
    require_once  './src/Calculadora.php';
    use App\Calculadora;

    if (isset($_POST['submit']) && $_POST['submit'] == 'Enviar') {
        $num1 = htmlspecialchars($_POST['num1'] ?? "", ENT_QUOTES);
        $num2 = htmlspecialchars($_POST['num2'] ?? "", ENT_QUOTES);
        $operacion = htmlspecialchars($_POST['operacion'] ?? "", ENT_QUOTES);

        $calculadora = new Calculadora();
        switch ($operacion) {
            case '+':
                $resultado = $calculadora->suma($num1, $num2);
                echo "EL resultado de la suma de $num1 y $num2 es: $resultado <br>";
                break;
            case '-':
                $resultado = $calculadora->resta($num1, $num2);
                echo "EL resultado de la resta de $num1 y $num2 es: $resultado <br>";
                break;

            case '*':
                $resultado = $calculadora->multiplicacion($num1, $num2);
                echo "EL resultado de la multiplicacion de $num1 y $num2 es: $resultado <br>";
                break;

            case '/':
                $resultado = $calculadora->division($num1, $num2);
                echo "EL resultado de la division de $num1 y $num2 es: $resultado <br>";
                break;
        
        }
    }

    ?>



</body>

</html>
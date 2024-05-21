 <!DOCTYPE html>
<html>
<head>
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <label for="num1">Digite o primeiro número:</label><br>
        <input type="text" id="num1" name="num1"><br>
        <label for="num2">Digite o segundo número:</label><br>
        <input type="text" id="num2" name="num2"><br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Função para calcular a adição com as condições especificadas
        function calcular_adicao($num1, $num2) {
            $soma = $num1 + $num2;
            
            if ($soma > 20) {
                $soma += 8;
            } else {
                $soma -= 5;
            }
            
            return $soma;
        }

        // Verifica se os campos foram preenchidos
        if (!empty($num1) && !empty($num2)) {
            $resultado = calcular_adicao($num1, $num2);
            echo "<br>O resultado é: " . $resultado;
        } else {
            echo "Por favor, preencha ambos os números.";
        }
    }
    ?>
</body>
</html>

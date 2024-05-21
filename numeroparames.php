<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Identificar Mês</title>
</head>
<body>
    <h2>Identificar Mês</h2>
    <form method="post">
        <label for="numero">Digite um número entre 1 e 12:</label><br>
        <input type="number" id="numero" name="numero" min="1" max="12"><br><br>
        <input type="submit" value="Identificar">
    </form>

    <?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        // Array associativo para mapear números de meses para seus nomes
        $meses = array(
            1 => "Janeiro",
            2 => "Fevereiro",
            3 => "Março",
            4 => "Abril",
            5 => "Maio",
            6 => "Junho",
            7 => "Julho",
            8 => "Agosto",
            9 => "Setembro",
            10 => "Outubro",
            11 => "Novembro",
            12 => "Dezembro"
        );

        // Verifica se o número está dentro do intervalo
        if($numero >= 1 && $numero <= 12) {
            echo "O número $numero corresponde ao mês de " . $meses[$numero] . ".";
        } else {
            echo "Não existe mês correspondente para o número $numero.";
        }
    }
    ?>
</body>
</html>

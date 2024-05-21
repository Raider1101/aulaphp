<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ordenar Números</title>
</head>
<body>
    <h2>Ordenar Números em Ordem Decrescente</h2>
    <form method="post">
        <label for="numero1">Número 1:</label><br>
        <input type="number" id="numero1" name="numero1"><br><br>
        <label for="numero2">Número 2:</label><br>
        <input type="number" id="numero2" name="numero2"><br><br>
        <label for="numero3">Número 3:</label><br>
        <input type="number" id="numero3" name="numero3"><br><br>
        <input type="submit" value="Ordenar">
    </form>

    <?php
    if(isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        $numeros = array($numero1, $numero2, $numero3);

        rsort($numeros);


        echo "Números em ordem decrescente: ";
        foreach($numeros as $numero) {
            echo $numero . " ";
        }
    }
    ?>
</body>
</html>

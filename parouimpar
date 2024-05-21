<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Verificar Divisibilidade</title>
</head>
<body>
    <h2>Verificar Divisibilidade</h2>
    <form method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="text" id="numero" name="numero"><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if(isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        if(is_numeric($numero)) {
            if($numero % 10 == 0) {
                echo "$numero é divisível por 10.";
            } elseif($numero % 5 == 0) {
                echo "$numero é divisível por 5, mas não por 10.";
            } elseif($numero % 2 == 0) {
                echo "$numero é divisível por 2, mas não por 5 ou 10.";
            } else {
                echo "$numero não é divisível por 10, 5 ou 2.";
            }
        } else {
            echo "Por favor, insira um número válido.";
        }
    }
    ?>
</body>
</html>

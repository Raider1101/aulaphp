<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aceitação</title>
</head>
<body class="bg-secondary text-white p-5">
    <h2>Verificar Aceitação</h2>
    <form method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        <label for="sexo">Sexo:</label><br>
        <input type="radio" id="feminino" name="sexo" value="Feminino">
        <label for="feminino">Feminino</label>
        <input type="radio" id="masculino" name="sexo" value="Masculino">
        <label for="masculino">Masculino</label><br><br>
        <label for="idade">Idade:</label><br>
        <input type="number" id="idade" name="idade"><br><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if(isset($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['idade'])) {
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];
        $idade = $_POST['idade'];

        if($sexo == 'Feminino' && $idade < 25) {
            echo "$nome: ACEITA.";
        } else {
            echo "$nome: NÃO ACEITA.";
        }
    }
    ?>
</body>
</html>

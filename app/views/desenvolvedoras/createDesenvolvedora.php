<?php
$url_base = "/arthur/mvc_jogos/";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu jogo</title>
</head>

<body>
    <h1>Cadastre sua desenvolvedora</h1>
    <form action="<?php echo $url_base . 'desenvolvedora/criar' ?>" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="pais_origem">Pais de origem:</label>
        <input type="text" name="pais_origem" id="pais_origem">
        <label for="ano_fundacao">Ano de fundação</label>
        <input type="number" name="ano_fundacao" id="ano_fundacao">

        <button type="submit">Criar</button>
    </form>
</body>

</html>
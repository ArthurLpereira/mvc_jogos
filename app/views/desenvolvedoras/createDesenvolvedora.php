<?php $url_base = "/arthur/mvc_jogos"; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie seu jogo</title>
    <link rel="stylesheet" href="<?php echo $url_base; ?>/public/css/style.css">

    <style>
        /* Estilo geral do corpo da página */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    padding: 2em;
}

/* Container do formulário */
.form-container {
    background-color: #fff;
    padding: 2em;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px;
    text-align: center;
}

/* Título do formulário */
h1 {
    color: #3f51b5; /* Cor azul para o título */
    margin-bottom: 1.5em;
    font-size: 1.8em;
}

/* Estilo para o formulário */
form {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

/* Estilo para as etiquetas (labels) */
label {
    margin-top: 1.2em;
    margin-bottom: 0.5em;
    font-weight: bold;
    color: #555;
    text-transform: uppercase;
    font-size: 0.9em;
}

/* Estilo para os campos de input */
input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 0.8em;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 1em;
}

/* Foco nos campos de input */
input[type="text"]:focus,
input[type="number"]:focus {
    border-color: #3f51b5;
    outline: none;
    box-shadow: 0 0 5px rgba(63, 81, 181, 0.5);
}

/* Estilo para o botão de submit */
button[type="submit"] {
    background-color: #3f51b5; /* Cor azul */
    color: white;
    padding: 1em;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 2em;
    font-size: 1.1em;
    font-weight: bold;
    width: 100%;
    transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
    background-color: #303f9f; /* Cor azul mais escura no hover */
}
    </style>
</head>

<body>
    <div class="form-container">
        <h1>Cadastre sua desenvolvedora</h1>
        <form action="<?php echo $url_base . '/desenvolvedora/criar' ?>" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome">
            <label for="pais_origem">País de origem:</label>
            <input type="text" name="pais_origem" id="pais_origem">
            <label for="ano_fundacao">Ano de fundação</label>
            <input type="number" name="ano_fundacao" id="ano_fundacao">

            <button type="submit">Criar</button>
        </form>
        <a href="<?php echo $url_base . '/desenvolvedora/lista' ?>">Lista</a>
    </div>
</body>

</html>
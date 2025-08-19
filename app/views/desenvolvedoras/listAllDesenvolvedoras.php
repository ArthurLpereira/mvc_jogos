<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Desenvolvedoras</title>
    <link rel="stylesheet" href="/arthur/estudando_mvc_pratico/public/css/style.css">
    <style>
        /* Estilos para a tabela */
        table {
            width: 80%;
            margin: 2em auto;
            border-collapse: collapse;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        /* Estilos para o cabeçalho da tabela */
        table thead th {
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            text-align: left;
            font-weight: bold;
        }

        /* Estilos para as células do corpo da tabela */
        table tbody td {
            padding: 1em;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        /* Efeito de hover nas linhas */
        table tbody tr:hover {
            background-color: #f1f1f1;
            transition: background-color 0.3s ease;
        }

        /* Estilo para a última linha do corpo da tabela */
        table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Estilos para o link "Voltar" */
        .back-link {
            display: inline-block;
            margin: 1em;
            padding: 0.8em 1.5em;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .back-link:hover {
            background-color: #5a6268;
        }

        /* Estilos para o container principal */
        .table-container {
            padding: 2em;
            background-color: #f4f4f9;
            min-height: 100vh;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            margin-top: 1em;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <h1>Lista de Colaboradores</h1>
        <a class="back-link" href="/arthur/mvc_jogos/index.php">Voltar para o formulário</a>
        <br><br>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!empty($desenvolvedoras)) {
                    foreach ($desenvolvedoras as $desenvolvedor) {
                ?>
                        <tr>
                            <td>
                                <?php echo htmlspecialchars($desenvolvedor['id']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($desenvolvedor['nome']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($desenvolvedor['pais_origem']); ?>
                            </td>
                            <td>
                                <?php echo htmlspecialchars($desenvolvedor['ano_fundacao']); ?>
                            </td>
                            <td>
                                <a
                                href="/arthur/estudando_mvc_pratico/colaboradores/visualizar/<?php echo htmlspecialchars($colaborador['id']); ?>">Visualizar</a>

                                <a href="/arthur/estudando_mvc_pratico/colaboradores/editar/<?php echo htmlspecialchars($colaborador['id']); ?>">Edite</a>

                                <a href="/arthur/estudando_mvc_pratico/colaboradores/deletar/<?php echo htmlspecialchars($colaborador['id']); ?>">Delete</a>

                            </td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan='4'>Nenhum colaborador encontrado.</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
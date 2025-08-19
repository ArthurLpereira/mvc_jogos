<?php

require_once('./app/models/Desenvolvedoras.php');

define('URL_BASE', '/arthur/mvc_jogos');

class desenvolvedorasController
{


    public function ShowFormCreateDesenvolvedora()
    {
        include "./app/views/desenvolvedoras/createDesenvolvedora.php";
    }

    public function CreateDesenvolvedora()
    {
        $dados = [
            'nome' => $_POST['nome'],
            'pais_origem' => $_POST['pais_origem'],
            'ano_fundacao' => $_POST['ano_fundacao'],
        ];

        try {
            $desenvolvedora = Desenvolvedoras::CreateDesenvolvedora($dados);
            header("Location:" . URL_BASE . "/index.php");
        } catch (PDOException $e) {
            echo "<h3>Algo deu errado no cadastro</h3>";
        }
    }

    public function ShowAllDesenvolvedoras()
    {
        // CORREÇÃO: Chama o método estático do Model corretamente
        $desenvolvedoras = Desenvolvedoras::readAllDesenvolvedoras();

        // Verifique a extensão correta do seu arquivo de listagem
        include "./app/views/desenvolvedoras/listAllDesenvolvedoras.php";
    }
}

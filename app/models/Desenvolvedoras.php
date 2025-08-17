<?php

include_once "./app/config/database.php";

class Desenvolvedoras
{
    public $id;
    public $nome;
    public $pais_origem;
    public $ano_fundacao;

    public function __construct($id, $nome, $pais_origem, $ano_fundacao)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->pais_origem = $pais_origem;
        $this->ano_fundacao = $ano_fundacao;
    }

    public static function CreateDesenvolvedora($dados)
    {
        $conn = Database::conection();
        $sql = "INSERT INTO desenvolvedoras (nome,pais_origem,ano_fundacao) VALUES (:nome,:pais_origem,:ano_fundacao)";
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':nome', $dados['nome']);
        $stmt->bindParam(':pais_origem', $dados['pais_origem']);
        $stmt->bindParam(':ano_fundacao', $dados['ano_fundacao']);

        $stmt->execute();

        $novoId = $conn->lastInsertId();
        return new self($novoId, $dados['nome'], $dados['pais_origem'], $dados['ano_fundacao']);
    }

    public static function ShowAllDesenvolvedoras()
    {
        $conn = Database::conection();
        $sql = "SELECT * FROM desenvolvedoras";
    }
}

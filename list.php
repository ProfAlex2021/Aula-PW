<?php
include "conexao.php";
global $conn;
header("Content-type: application/json; charset=utf-8");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT `id`, `nome`, `idade` FROM `pessoa`";
    try {
        $stm = $conn->prepare($sql);
        $stm->execute();
        $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($dados);
    } catch (PDOException $e) {
        echo json_encode(array("erro" => "Erro ao listar dados da tabela: " . $e->getMessage()));
    }
}else
    echo json_encode(array("erro" => "Método de acesso rejeitado pelo servidor"));
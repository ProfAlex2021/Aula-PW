<?php
include "../conexao.php";

global $conn;

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT `id`, `nome`, `idade` FROM `pessoa`";
    try {
        $stm = $conn->prepare($sql);
        $stm->execute();
        $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
        foreach ($dados as $poiscao => $linha) {
            $linha['id'] = intval($linha['id']);
            $linha['idade'] = intval($linha['idade']);
        }
        echo json_encode($dados, JSON_NUMERIC_CHECK);
    } catch (PDOException $e) {
        
        echo json_encode(array("erro" => "Erro ao listar dados da tabela: " . $e->getMessage()));
    }
}else
    echo json_encode(array("erro" => "Método de acesso rejeitado pelo servidor"));
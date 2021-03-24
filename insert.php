<?php
include "create_table.php";
global $conn;
header("Content-type: application/json; charset=utf-8");

if (isset($_POST["dados"])) { //Verificar se existe o campo "dados" enviado SOMENTE pelo método POST
    $json = json_decode($_POST["dados"], true); //Converter o texto para JSON
    $sql = "INSERT INTO `pessoa`( `nome`, `idade`) VALUES('$json[texto]', $json[numero])";
    try {
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
        echo json_encode(array("id" => intval($last_id),
                         "nome" => $json['texto'],
                         "idade" => $json['numero']));

        //echo "Tabela criada com sucesso!";
    } catch (PDOException $e) {
        echo json_encode(array("erro" => "Erro ao cadastrar: " . $e->getMessage()));
    }
}else
    echo json_encode(array("erro" => "Método de acesso ou variáveis rejeitadas pelo servidor"));

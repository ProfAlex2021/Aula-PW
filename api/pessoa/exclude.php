<?php
include "create_table.php";
global $conn;

if (isset($_GET['id'])) { //Verificar se existe o campo "dados" enviado SOMENTE pelo método POST
    $sql = "DELETE FROM `pessoa` WHERE `id`=:id";
    try {
        $preparo = $conn->prepare($sql);
        $preparo->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
        $preparo->execute();
        echo '{}';

        //echo "Tabela criada com sucesso!";
    } catch (PDOException $e) {
        echo json_encode(array("erro" => "Erro ao cadastrar: " . $e->getMessage()));
    }
}else
    echo json_encode(array("erro" => "Método de acesso ou variáveis rejeitadas pelo servidor"));

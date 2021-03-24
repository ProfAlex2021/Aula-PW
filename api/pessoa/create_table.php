<?php
include "../conexao.php";
global $conn;
$sql = "CREATE TABLE IF NOT EXISTS `pessoa` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nome` varchar(100) NOT NULL,
    `idade` int(11) NOT NULL,
    PRIMARY KEY (`id`)
   )";

try {
    $conn->exec($sql);
    //echo "Tabela criada com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao criar a tabela: " . $e->getMessage();
}
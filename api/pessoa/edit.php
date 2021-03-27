<?php
include "create_table.php";
global $conn;

parse_str(file_get_contents("php://input", FILE_TEXT), $dados);//Receber toda informação enviada para $dados
$d = current($dados);//Esses dados estão em array (o comando current pega o elemento atual, ou o primeiro, do array)
$d = substr($d,strpos($d,"{"),strlen($d));//Removendo textos até o início do JSON
$PUT = substr($d,0,strrpos($d, "}")+1);//Removendo textos após término do JSON

if (strlen($PUT) > 0) { //Verificar se existe o campo "dados" enviado SOMENTE pelo método POST
    $json = json_decode($PUT, true); //Converter o texto para JSON
    $sql = "UPDATE `pessoa` SET `nome`=:nome,`idade`=:idade WHERE `id`=:id";
    try {
        $preparo = $conn->prepare($sql);
        $preparo->bindParam(':nome', $json['texto'], PDO::PARAM_STR);
        $preparo->bindParam(':idade', $json['numero'], PDO::PARAM_INT);
        $preparo->bindParam(':id', $json['id'], PDO::PARAM_INT);
        $preparo->execute();
        echo $PUT;

        //echo "Tabela criada com sucesso!";
    } catch (PDOException $e) {
        echo json_encode(array("erro" => "Erro ao cadastrar: " . $e->getMessage()));
    }
}else
    echo json_encode(array("erro" => "Método de acesso ou variáveis rejeitadas pelo servidor"));

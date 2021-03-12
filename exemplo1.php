<?php
header("Content-type: application/json; charset=utf-8");
if (isset($_POST["dados"])) { //Verificar se existe o campo "dados" enviado SOMENTE pelo método POST
    $json = json_decode($_POST["dados"]); //Converter o texto para JSON
    $resposta = array('status' => "Foi recebido o texto " . $json->{'texto'} . " e o número: " . $json->{'numero'}); //Gerar a resposta lendo o JSON convertido
} else //Caso contrário (requisição enviada por GET ou POST mal formatado)
    $resposta = array("texto" => "Mensagem da aula"); //Resposta padrão

echo json_encode($resposta);//Enviando a resposta no formato JSON
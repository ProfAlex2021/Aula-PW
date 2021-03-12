var json;
$(document).ready(function () {//Esperar o documento HTML terminar de ser carregado
    $("button").click(function () {//Encontrar a tag "button" e adicionar evento click
        getExemplo();//Consumir o método GET da API
    });
    $("form").submit(function () {//Encontrar a tag "form" e adicionar evento de ENVIO
        postExemplo();//Consumir o método POST da API
        return false;//Interceptar e cancelar o envio do formulário
    });
});

function getExemplo() {
    $.get("exemplo1.php", function (response) {//Enviar requisição GET para o end-point "exemplo1.php"
        exibirExemplo(response.texto);//Exibir o membro "texto" do JSON recebido pela API
    });
}

function postExemplo() {
    let dados = { "texto": $("#txtExemplo").val(), "numero": $("#nmbExemplo").val() }//Reunir os dados do formulário em único JSON

    $.post(
        "exemplo1.php",
        { "dados": JSON.stringify(dados) }, //Converter para texto o JSON dos dados e enviar como campo "dados"
        function (response) {
            exibirExemplo(response.status);//Exibir o membro "status" do JSON recebido pela API
        });
}

function exibirExemplo(mensagem) {//Processo padronizado para exibir mensagem
    $("#divResultado").text(mensagem);
}
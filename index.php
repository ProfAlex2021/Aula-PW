<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Bootstrap 4 Website - Aula de PW III</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/default.min.css" integrity="sha512-kZqGbhf9JTB4bVJ0G8HCkqmaPcRgo88F0dneK30yku5Y/dep7CZfCnNml2Je/sY4lBoqoksXz4PtVXS4GHSUzQ==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/darcula.min.css" integrity="sha512-0+Gq7jQLhuoMdL8EednGo8delKMhKim1t3XrvVGTqbJPfyv5f4HUJ0DTEN+3E+aM4RGEEfmVJOiomnP9olm4iw==" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/highlight.min.js" integrity="sha512-d00ajEME7cZhepRqSIVsQVGDJBdZlfHyQLNC6tZXYKTG7iwcF8nhlFuppanz8hYgXr8VvlfKh4gLC25ud3c90A==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/languages/php.min.js" integrity="sha512-7S8lxceq6D9eiBTl+LuqsKGECzYG8LERGi2IuTZfcqR1EOpsFwPViAs/GAvqKx52qJSFSbLKYUoBsKLojSIGPQ==" crossorigin="anonymous"></script>    <script>hljs.highlightAll();</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js" integrity="sha512-axd5V66bnXpNVQzm1c7u1M614TVRXXtouyWCE+eMYl8ALK8ePJEs96Xtx7VVrPBc0UraCn63U1+ARFI3ofW+aA==" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>

    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <h1>Minha primeira página com Bootstrap</h1>
        <p>Redimensione esta página para ver o efeito da responsividade!</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html">Home</a>

        <!-- Links -->
        <ul class="navbar-nav">
            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    API - Pessoa
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="listar.html">Listar</a>
                    <a class="dropdown-item" href="cadastrar.html">Cadastrar</a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container" style="margin-top:30px">
        <div class="row">
            <div class="col-sm-*">
                <h2>Apresentação do site de PW III - A batalha final</h2>
                <h5>Desenvolvido em aula em Março 23, 2021</h5>
                <pre><code class="code">&lt;?php
function str2int($item, $pos) {
    return gettype($item) === 'string' ? intval($item) : $item;
}?&gt;
                </code></pre>
      
      </pre>
                <p>Exemplo de trecho de código usado na estrutura deste site.</p>
            </div>
        </div>
    </div>

    <div class="jumbotron text-center" style="margin-bottom:0">
        <p>Footer</p>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Bootstrap 4 Website - Aula de PW III</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/sons-of-obsidian.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js?lang=css&amp;skin=sunburst"></script>
    <style>
        .fakeimg {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>

<body onload="PR.prettyPrint()">

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
                <pre class="prettyprint linenums">&lt;?php
                                                    function str2int($item, $pos)
                                                    {
                                                        return gettype($item) === 'string' ? intval($item) : $item;
                                                    } ?&gt;
      
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
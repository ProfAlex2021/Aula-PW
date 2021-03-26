<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Aula de PW III</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/default.min.css" integrity="sha512-kZqGbhf9JTB4bVJ0G8HCkqmaPcRgo88F0dneK30yku5Y/dep7CZfCnNml2Je/sY4lBoqoksXz4PtVXS4GHSUzQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/styles/darcula.min.css" integrity="sha512-0+Gq7jQLhuoMdL8EednGo8delKMhKim1t3XrvVGTqbJPfyv5f4HUJ0DTEN+3E+aM4RGEEfmVJOiomnP9olm4iw==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> 
        <link rel="stylesheet" href="css/index.css"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js" integrity="sha512-hCP3piYGSBPqnXypdKxKPSOzBHF75oU8wQ81a6OiGXHFMeKs9/8ChbgYl7pUvwImXJb03N4bs1o1DzmbokeeFw==" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/highlight.min.js" integrity="sha512-d00ajEME7cZhepRqSIVsQVGDJBdZlfHyQLNC6tZXYKTG7iwcF8nhlFuppanz8hYgXr8VvlfKh4gLC25ud3c90A==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.7.1/languages/php.min.js" integrity="sha512-7S8lxceq6D9eiBTl+LuqsKGECzYG8LERGi2IuTZfcqR1EOpsFwPViAs/GAvqKx52qJSFSbLKYUoBsKLojSIGPQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.8.0/highlightjs-line-numbers.min.js" integrity="sha512-axd5V66bnXpNVQzm1c7u1M614TVRXXtouyWCE+eMYl8ALK8ePJEs96Xtx7VVrPBc0UraCn63U1+ARFI3ofW+aA==" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/highlightjs-badge@0.1.9/highlightjs-badge.min.js" integrity="sha512-gguWIqcGs/CaJttRlYrw8Rd904nQI3Y0/wzDFwCs7PtAjXA3gzFzD10XBM2XrUI4K4PNi4N6W6qhTITMS9lBwQ==" crossorigin="anonymous"></script>
        <script src="js/index.js"></script>
        <style>
        </style>
    </head>
    <body>
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>Minha primeira página com Bootstrap</h1>
            <p>Redimensione esta página para ver o efeito da responsividade!</p>
        </div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="index.html">Home</a>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">API - Pessoa</a>
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
                    <pre><code class="hljs code lang-php">&lt;?php
function str2int($item, $pos) {
    return gettype($item) === 'string' ? intval($item) : $item;
}?&gt;
                    </code></pre>
                    <p>Exemplo de trecho de código usado na estrutura deste site.</p>
                </div>
            </div>
        </div>
        <div class="jumbotron text-center fixed-bottom" style="margin-bottom:0">
            <p>Técnico em Desenvolvimento de Sistemas ® &copy; - <?php echo date("Y")?></p>
        </div>
    </body>
</html>
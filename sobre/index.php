<?php $GLOBALS["navigation"] = "Sobre" ?>

<!DOCTYPE html>
<html>

<head>
    <title>Sobre | SGA 2.0 | O todo académico</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Cláudio Duarte">
    <meta name="description" content="Consulta as Senhas dos Balcões dos Serviços de Gestão Académica da Universidade de Aveiro">
    <meta name="keywords" content="Universidade de Aveiro, SGA, Académicos, Cláudio Duarte">
    <!-- FACEBOOK OPEN GRAPH -->
    <meta name="og:site_name" content="SGA 2.0 | O todo académico">
    <meta name="og:image" content="../assets/img/social-image.png">
    <meta name="og:url" content="https://senhas.claudioduarte.pt/">
    <meta name="og:description" content="Consulta as Senhas dos Balcões dos Serviços de Gestão Académica da Universidade de Aveiro">
    <!-- FAVICON -->
    <link href="../assets/img/favicon.png" rel="shortcut icon">
    <!-- CSS -->
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <?php include "../partials/scripts.php" ?>
</head>

<body>
    <?php include "../partials/navbar.php" ?>
    <main class="wrapper">
        <div class="ticket-table group">
            <header class="cd-header">
                <a href="/"><img class="logo" src="../assets/img/logo.png"></a>
                <a href="/"><img class="logo-mobile" src="../assets/img/logo-mobile.png"></a>
                <a href="#" class="cd-3d-nav-trigger">Menu<span></span></a>
            </header>
            <div class="informative-tables">
                <h2 class="title">
                    <span>O Projeto</span>
                </h2>
                <div class="content">
                    <p>
                        O projeto apresenta-se como sendo uma alternativa mais viável e user-friendly para a comunidade académica visualizar as senhas dos SGA.
                    </p>
                </div>
            </div>
            <div class="informative-tables">
                <h2 class="title">
                    <span>Agradecimentos</span>
                </h2>
                <div class="content">
                    <p>
                        João Carvalho, Daniel Ferreira, Maria João Soares, Emília Castro, Marta Cabral, Carlos Santos, Joana Rocha, Paula Moreto, Carlos Queirós, Rita Albuquerque, Glória Pires, Leonor Nascimento, Andreia Bastos e Nantília Nunes
                    </p>
                </div>
            </div>
            <div class="informative-tables">
                <h2 class="title">
                    <span>Ficha Técnica</span>
                </h2>
                <div class="content">
                    <p>
                        Projeto realizado e desenvolvido em âmbito extra-curricular por <a href="https://claudioduarte.pt" target="_blank">Cláudio Duarte</a>, Freelancer e ex-aluno do Mestrado em
                        Comunicação Multimédia no ramo de Multimédia Interativo.
                    </p>
                    <p>
                        A API utilizada (SAC API) foi criada por Pedro Ferreira. Poderá ser encontrada em <a href="http://api.web.ua.pt/" target="_blank">api.web.ua.pt</a>
                    </p>
                </div>
            </div>
            <div class="informative-tables">
                <h2 class="title">
                    <span>Disclaimer</span>
                </h2>
                <div class="content">
                    <p>Esta página não está, de forma alguma, associada aos Serviços de Gestão Académica da Universidade de Aveiro, pelo que a informação aqui constante é meramente informativa e não vinculativa.</p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
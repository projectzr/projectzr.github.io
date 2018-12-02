<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Modernismo: Autor Destaque</title>
    <?php include 'includes/estrutura/head.php'; ?>
    <link rel="stylesheet" href="css/modernismo.css">

</head>

<body>

    <!-- Menu de Navegação
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/navbar.php'; ?>

    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php 
    $titulo="Modernismo";
    $subtitulo="Autor de Destaque"; 
    include 'includes/modernismo-header.php'; 
    ?>

    <!-- $nome-extra-a: nome do primeiro link extra -->
    <!-- $link-extra-a: link do primeiro link extra -->
    <!-- $nome-extra-b: nome do segundo link extra -->
    <!-- $link-extra-b: link do segundo link extra -->

    <?php 
    $nomea="Semana da Arte Moderna";
    $linka="modernismo-contexto-historico.php";
    $nomeb="Principais Obras";
    $linkb="modernismo-principais-obras.php";
    include 'includes/breadcrumb.php'; 
    ?>

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <article>
        <h1 style="display: none">Conteúdo</h1>


        <div class="container section" id="conteudo">

            <div class="row">
                <h1 class="titulo no-space text-center">Mário de Andrade</h1>
                <div class="divisor"></div>

                <div class="col-xs-12 col-md-9 ">

                    <div class=" col-xs-12 col-md-12 paddingimg"> <img class="center-img" src="img/modernismo/Mario_de_andrade.png" alt="Mário de Andrade."></div>
                    <p class="mid-space first-letter text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis. Officia, non, voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum est sunt eligendi molestiae nemo blanditiis, quisquam maiores aut quam ducimus nulla ullam magnam corporis sapiente in reiciendis.
                    </p>
                </div>
                <div class="col-xs-12 col-md-3">


                    <h3 class="titulo title-left text-center mid-space">Principais Obras</h3>

                    <p>Mário de Andrade deixou uma vasta obra desde romances, poemas, críticas, contos, crônicas, ensaios:</p>

                    <ul>
                        <li class="li_modernismo">Há uma Gota de Sangue em Cada Poema (1917)</li>
                        <li class="li_modernismo">Paulicéia Desvairada (1922)</li>
                        <li class="li_modernismo">A Escrava que não é Isaura (1925)</li>
                        <li class="li_modernismo">Primeiro Andar (1926)</li>
                        <li class="li_modernismo">Clã do Jabuti (1927)</li>
                        <li class="li_modernismo">Amar, Verbo Intransitivo (1927)</li>
                        <li class="li_modernismo">Macunaíma (1928)</li>
                        <li class="li_modernismo">O Aleijadinho de Álvares de Azevedo (1935)</li>
                        <li class="li_modernismo">Poesias (1941)</li>
                        <li class="li_modernismo">O Movimento Modernista (1942)</li>
                        <li class="li_modernismo">O Empalhador de Passarinhos (1944)</li>
                        <li class="li_modernismo">Lira Paulistana (1946)</li>
                        <li class="li_modernismo">Contos Novos (1947)</li>
                        <li class="li_modernismo">Poesias Completas (1955)</li>
                        <li class="li_modernismo">O Banquete (1978)</li>
                    </ul>


                </div>
            </div>

        </div>

    </article>


    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>

</body>

</html>

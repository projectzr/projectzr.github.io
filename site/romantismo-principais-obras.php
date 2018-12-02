<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Romantismo: Principais Obras</title>
    <link rel="stylesheet" href="css/romantismo.css">
    <?php include 'includes/estrutura/head.php'; ?>

</head>

<body>

    <!-- Menu de Navegação
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/navbar.php'; ?>

    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php 
    $titulo="Romantismo";
    $subtitulo="Principais Obras"; 
    include 'includes/section-header.php'; 
    ?>

    <!-- $nome-extra-a: nome do primeiro link extra -->
    <!-- $link-extra-a: link do primeiro link extra -->
    <!-- $nome-extra-b: nome do primeiro link extra -->
    <!-- $link-extra-b: link do primeiro link extra -->

    <?php 
    $nomea="Romantismo e a Independência";
    $linka="romantismo-contexto-historico.php";
    $nomeb="Autor de destaque";
    $linkb="romantismo-autor-destaque.php";
    include 'includes/breadcrumb.php'; 
    ?>

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <main>
        <h1 style="display: none">Conteúdo</h1>

        <!-- Conteudo
        OBS: O Section define o espaçamento padrão de uma SESSÃO, 
        container se refere a classe usada pelo bootstrap
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <article class="section container" id="conteudo">
            <div class="col-md-12 principais-obras">
                <h3 class="sub-titulo titulo-pag-obra">Conheça a seguir um pouco mais a respeito das principais obras literárias do Romantismo Brasileiro.</h3>
                <div class="col-md-12 obra-esquerda">
                    <div class="img-obra-esquerda1" alt="O Guarani."></div>
                    <div class="col-md-10">
                        <h3 class="sub-titulo titulo-obra">O GUARANI</h3>
                        <p class="txt-obra">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora </p>
                        <p class="sitacao-obra"><em>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero. " 
                 </em></p>
                    </div>

                </div>
                <div class="col-md-12 obra-esquerda">
                    <div class="img-obra-esquerda2" alt="A Escrava Isaura."></div>
                    <div class="col-md-10">
                        <h3 class="sub-titulo titulo-obra">A ESCRAVA ISAURA</h3>
                        <p class="txt-obra">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora </p>
                        <p class="sitacao-obra"><em>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero. " 
                 </em></p>
                    </div>

                </div>
                <div class="col-md-12 obra-direita">
                    <div class="img-obra-direita1" alt="Memórias de um Sargento de Milícias."></div>
                    <div class="col-md-10">
                        <h3 class="sub-titulo titulo-obra-direita">MEMÓRIAS DE UM SARGENTO DE MILÍCIAS</h3>
                        <p class="txt-obra-direita">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora </p>
                        <p class="sitacao-obra-direita"><em>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero. " 
                 </em></p>
                    </div>

                </div>
                <div class="col-md-12 obra-direita">
                    <div class="img-obra-direita2" alt="Os Timbiras"></div>
                    <div class="col-md-10">
                        <h3 class="sub-titulo titulo-obra-direita">OS TIMBIRAS</h3>
                        <p class="txt-obra-direita">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora </p>
                        <p class="sitacao-obra-direita"><em>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero. " 
                 </em></p>
                    </div>

                </div>
            </div>
        </article>

    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>

</body>

</html>

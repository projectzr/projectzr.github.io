<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head> 
   
    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Pós-Modernismo: Principais Obras</title>
    <link rel="stylesheet" href="css/pos-modernismo.css">
    <?php include 'includes/estrutura/head.php'; ?>
    
</head>

<body>

    <!-- Menu de Navegação
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/navbar.php'; ?>

    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php 
    $titulo="Pós-Modernismo";
    $subtitulo="Principais Obras"; 
    include 'includes/section-header.php'; 
    ?>    
    
    <!-- $nome-extra-a: nome do primeiro link extra -->
    <!-- $link-extra-a: link do primeiro link extra -->
    <!-- $nome-extra-b: nome do primeiro link extra -->
    <!-- $link-extra-b: link do primeiro link extra -->
    
    <?php 
    $nomea="A Guerra, A História";
    $linka="pos-modernismo-contexto-historico.php";
    $nomeb="Autor de destaque";
    $linkb="pos-modernismo-autor-destaque.php";
    include 'includes/breadcrumb.php'; 
    ?>  

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <main class="section container"> 
        <h1 class="titulo no-space text-center">Em Produção</h1>
        <div class="divisor"></div>

        <article class="col-sm-7 text-justify article-obras">
            <h2 class="titulo title-left text-left mid-space line-correction">Guimarães Rosa</h2>
            <p class="mid-space">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni!</p>
            
            <p class="titulo title-left text-left mid-space line-correction">Clarice Lispector</p>
            <p class="mid-space">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni!</p>
            
            <p class="titulo title-left text-left mid-space line-correction">Dalton Trevisan</p>
            <p class="mid-space">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni!</p>
            
            <p class="titulo title-left text-left mid-space line-correction">Vanguardas poéticas</p>
            <p class="mid-space">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni!</p>
            
            <p class="titulo title-left text-left mid-space line-correction">Produções contemporâneas</p>
            <p class="mid-space">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni!</p>
            
            <p class="referencias">Referência: <a href="https://pt.wikipedia.org/wiki/Wikip%C3%A9dia:P%C3%A1gina_principal">Wikipédia - A enciclopedia livre</a></p>
        </article>

        <aside class="col-sm-5 text-left aside-obras">
            <h2 class="titulo title-left text-left mid-space">Obras de Destaque</h2>
            <img src="img/pos-modernismo/contexto-banner.jpg" alt="contexto histórico" class="foto-obras mid-space">
            <div>
            <img src="img/pos-modernismo/principais-obras-primeira.jpg" class="foto-livro" alt="primeira obra de destaque" style="float: left;">
            <p class="sub-titulo no-space">Grande Sertão: Veredas</p>
            <p><strong>Guimarães Rosa</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
            <img src="img/pos-modernismo/principais-obras-segunda.jpg" class="foto-livro" alt="segunda obra de destaque" style="float: left;">
            <p class="sub-titulo no-space">Abismo de rosas</p>
            <p><strong>Dalton Trevisan</strong></p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </aside>

    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>   

</body>

</html>

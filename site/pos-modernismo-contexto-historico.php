<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head> 
   
    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Pós-Modernismo: Contexto Histórico</title>
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
    $subtitulo="Contexto Histórico"; 
    include 'includes/section-header.php'; 
    ?>    
    
    <!-- $nome-extra-a: nome do primeiro link extra -->
    <!-- $link-extra-a: link do primeiro link extra -->
    <!-- $nome-extra-b: nome do primeiro link extra -->
    <!-- $link-extra-b: link do primeiro link extra -->
    
    <?php 
    $nomea="Obras que Marcaram";
    $linka="pos-modernismo-principais-obras.php";
    $nomeb="Autor de destaque";
    $linkb="pos-modernismo-autor-destaque.php";
    include 'includes/breadcrumb.php'; 
    ?>  

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <main>
        <h1 style="display: none">Contexto Histórico</h1>
       
        <div class="section container"> 
            
            <article class="col-xs-12">
                <img src="img/pos-modernismo/contexto-banner-2.jpg" class="contexto-img" alt="zona de guerra decada de 40">
                
                <h2 class="titulo no-space text-center">A Guerra, A História</h2>
                <div class="divisor"></div>
                
                <div class="coluna-esquerda col-md-6">
                    <blockquote class="mid-space contexto-bq">
                        <p class="text-justify">"Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe Magni!"</p>
                    </blockquote>
                    <p class="text-justify first-letter">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    <p class="text-justify mid-space ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni!</p>
                </div>

                <div class="coluna-direita col-md-6">
                    <div id="spacer"></div>
                    <p class="titulo title-left text-justify mid-space line-correction">O Pós-Modernismo</p>
                    <p class="text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni!</p>
                    <p class="mid-space text-justify">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed totam nulla ducimus labore. Magni!</p>
                </div>
            </article>
            
        </div>
        
    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>   

</body>

</html>

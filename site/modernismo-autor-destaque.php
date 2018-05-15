<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head> 
   
    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Modernismo: Autor de Destaque</title>
    <link rel="stylesheet" href="css/modernismo.css">
    <?php include 'includes/estrutura/head.php'; ?>
    
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
    include 'includes/section-header.php'; 
    ?>    

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <main>
        <h1 style="display: none">Conteúdo</h1>
        
        <!-- Conteudo
        OBS: O Section define o espaçamento padrão de uma SESSÃO, 
        container se refere a classe usada pelo bootstrap
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <article class="section container"> 
            <h2>Em Produção</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
            eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
            totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
            minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
            eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
            totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
            minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
            eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
            totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
            minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
        </article>
        
    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>   

</body>

</html>
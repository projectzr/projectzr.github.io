<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Pré-Modernismo: Autor Destaque </title>
    <?php include 'includes/estrutura/head.php'; ?>
    <link rel="stylesheet" href="css/pre-modernismo.css">

</head>

<body>

    <!-- Menu de Navegação
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/navbar.php'; ?>

    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php 
    $titulo="Pré-Modernismo";
    $subtitulo="Autor de destaque: Euclides da Cunha"; 
    include 'includes/section-header.php'; 
    ?>

    <?php 
    $nomea="Contexto";
    $linka="pre-modernismo-contexto-historico.php";
    $nomeb="Principais obras";
    $linkb="pre-modernismo-principais-obras.php";
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



            <div class="text-left col-md-12 cor-contexto">
                <div class="col-md-4">
                    <img src="img/pre-mord/euclides.jpg" alt="Euclides da Cunha." class="center-block">
                </div>
                <div class="col-md-8">

                    <h3 class="titulo cor-autor-destaque line text-left">Biografia</h3>
                </div>
                <p class="capitular">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse setotam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sedLorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.d.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>

                <h3 class="titulo cor-autor-destaque line">Principais Obras</h3>
                <ul>
                    <li>
                        <p>Lorem ipsum dolor sit;</p>
                    </li>
                    <li>
                        <p>Aut, iste molestias;</p>
                    </li>
                    <li>
                        <p>Fugit quisquam corporis;</p>
                    </li>
                    <li>
                        <p>Lorem ipsum dolor sit amet;</p>
                    </li>

                </ul>
            </div>



        </article>

    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>

</body>

</html>

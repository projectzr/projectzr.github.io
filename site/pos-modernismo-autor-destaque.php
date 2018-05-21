<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head> 
   
    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Pós-Modernismo: Autor de Destaque</title>
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
        <div class="section container"> 
            <div class="row text-left">
                <aside class="col-md-4 col-md-push-8">
                    <h2 style="display: none">Dados do autor</h2>
                    <div class="col-md-12 col-sm-6 text-center">
                        <img src="img/pos-modernismo/guimaraes-rosa.jpg" alt="foto do autor" class="foto-autor">
                    </div>
                    
                    <div class="col-md-12 col-sm-6 text-center">
                        <table class="ficha-tecnica">
                        <tr>
                        <td>Nome</td>
                        <td>João Guimarães Rosa</td>
                        </tr>
                        <tr>
                        <td>Nascimento</td>
                        <td>27 de junho de 1908</td>
                        </tr>
                        <tr>
                        <td>Morte</td>
                        <td>19 de nov. de 1967 (59 anos)</td>
                        </tr>
                        <tr>
                        <td>Ocupação</td>
                        <td>Escritor, médico, diplomata</td>
                        </tr>
                        <tr>
                        <td>Prêmios</td>
                        <td>Prêmio Felippe d’Oliveira (1946)
                        <br>Prêmio Carmem Dolores Barbosa (1957)
                        <br>Prêmio Machado de Assis (1961)
                        <br>Prémio Jabuti 1993
                        <br>Ordem do Mérito Cultural (2008)</td>
                        </tr>
                        <tr>
                        <td>Magnum opus</td>
                        <td>Grande Sertão: Veredas</td>
                        </tr>
                        </table>
                    </div>
                </aside>
                <article class="col-md-8 col-md-pull-4">
                    <h2 class="titulo no-space text-center">Em Produção</h2>
                    <div class="divisor"></div>
                    <p class="mid-space first-letter">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    
                    <p class="titulo title-left text-left mid-space line-correction">Sub-titulo</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    
                    <p class="titulo title-left text-left mid-space line-correction">Sub-titulo</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                </article>
            </div>
        </div>
        
    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>   

</body>

</html>

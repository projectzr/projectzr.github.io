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
                        <img src="img/simb/cruz-e-souza.jpg" alt="foto do autor" class="foto-autor">
                    </div>
                    
                    <div class="col-md-12 col-sm-6 text-center">
                        <table class="ficha-tecnica">
                        <tr>
                        <td>Nome completo</td>
                        <td>Ariano Vilar Suassuna</td>
                        </tr>
                        <tr>
                        <td>Nascimento</td>
                        <td>16 de junho de 1927,<br>Cidade da Parahyba, Paraíba</td>
                        </tr>
                        <tr>
                        <td>Morte</td>
                        <td>23 de julho de 2014 (87 anos)<br>Recife, Pernambuco</td>
                        </tr>
                        <tr>
                        <td>Alma mater</td>
                        <td>Faculdade de Direito do Recife</td>
                        </tr>
                        <tr>
                        <td>Ocupação</td>
                        <td>Dramaturgo, romancista, ensaísta e poeta</td>
                        </tr>
                        <tr>
                        <td>Prêmios</td>
                        <td>Prêmio Nacional de Ficção (1973)</td>
                        </tr>
                        <tr>
                        <td>Magnum opus</td>
                        <td>Auto da Compadecida (1955)<br>Romance d'A Pedra do Reino e o Príncipe do Sangue do Vai-e-Volta (1971)</td>
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
                    
                    <p class="titulo title-left text-left mid-space">Sub-titulo</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus
                    eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus
                    totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum
                    minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.</p>
                    
                    <p class="titulo title-left text-left mid-space">Sub-titulo</p>
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

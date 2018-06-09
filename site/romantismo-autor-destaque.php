<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="zxx">

<head> 
   
    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Romantismo: Autor de Destaque</title>
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
           
         <div class="text-left col-md-8 col-sm-12 bloco-biografia">
                <div class="col-md-6 col-sm-6 autortitulo"> 
                <h2 class="titulo">José de Alencar</h2>
             </div>
              <div class=" col-md-6 col-sm-6">
                <img class="img-autor" src="img/romantismo/Jose_de_Alencar.png" alt="Imagem do Busto do Autor José de Alencar.">
             </div>

                <h3 class="sub-titulo line">Biografia</h3>

                
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sedLorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse setotam nulla ducimus labore. Magni!
                </p>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sedLorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.d.
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed. adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora vero sapiente minus quaerat magni magnam suscipit quia quod, assumenda saepe voluptatibus totam nulla ducimus labore. Magni! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed</p>   
           </div>
           <aside>
           <div class="text-left col-md-4 col-sm-12">


                <div class="col-md-12 col-sm-12 bloco-p-obras">
                    
                
                <h3 class="titulo titulo2">Principais obras</h3>
                <div class="col-md-12 col-sm-12 tres-obras">
                    <div class="img-obra"><img src="img/romantismo/oguarani.png" alt="Imagem da capa da obra O Guarani de José de alencar." ></div>
                <p class="txt-obra">O GUARANI: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Placeat cum minima provident impedit mollitia nobis soluta debitis illo, ex iure ducimus, deserunt dolorum esse sed.d.
                </p>
                </div>
                <div class="col-md-12 col-sm-12 tres-obras">
                    <div class="img-obra"><img src="img/romantismo/iracema.png" alt"Imagem da capa da obra Iracema de José de alencar." ></div>
                <p class="txt-obra">IRACEMA: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora  </p>
                </div>
                <div class="col-md-12 col-sm-12 tres-obras">
                    <div class="img-obra"><img src="img/romantismo/minasdeprata.png" alt="Imagem da capa da obra As minas de prata de José de alencar." ></div>
                <p class="txt-obra">AS MINAS DE PRATA: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut, iste molestias? Fugit quisquam corporis repellendus eligendi inventore tempora</p>
                </div>
               </div>
               </div>
            </aside>  
        </article>
        
    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>   

</body>

</html>
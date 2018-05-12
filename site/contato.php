<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head> 
   
    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>TITULO DO SITE</title>
    <?php include 'includes/estrutura/head.php'; ?>
    
</head>

<body>

    <!-- Menu de Navegação
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/navbar.php'; ?>

    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php 
    $titulo="CONTATO";
    // SE VOCÊ NÃO DECLARAR A VARIAVEL SUBTITULO
    // VAI FUNCIONAR! FICARÁ APENAS COM UM TITULO
    $subtitulo="TESTE"; 
    include 'includes/section-header.php'; 
    ?>    

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <main>
        <h1 style="display: none">Conteúdo</h1>
        
        <!-- Conteudo
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        <p>SEU CONTEUDO AQUI</p>
        
    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>   

</body>

</html>
<?php include 'includes/estrutura/assinatura.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Informações básicas
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <title>Brasil Literário - Contato</title>
    <?php include 'includes/estrutura/head.php'; ?>

</head>

<body>

    <!-- Menu de Navegação
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/navbar.php'; ?>

    <!-- Header
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php $titulo='Portal Brasil Literário'; $subtitulo='Contato'; include 'includes/section-header.php'; ?>

    <!-- Conteúdo
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <main>
        <h1 style="display: none">Conteúdo</h1>

        <!-- Escolas Literárias
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <div class="container section text-left">
            <div class="row text-left">
                <article class="col-xs-12 col-md-6 col-lg-6 ">
                    <h2 class="h1">Informações</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin imperdiet suscipit ante ac pulvinar. Cras
                        vel mi ullamcorper, bibendum mi nec, posuere neque. Integer tristique neque metus, ut dapibus est
                        tristique non. Sed eget magna tempor eros bibendum mollis ac nec ligula.</p>
                    <p>Curabitur molestie ipsum et mi rutrum pellentesque. Donec vestibulum diam vitae convallis rhoncus. Curabitur
                        vel porta elit. Nulla vel libero mattis, maximus dolor vel, eleifend tortor. Maecenas fringilla nisi
                        in vulputate hendrerit.</p>
                    <p>Praesent gravida posuere ante, id molestie tellus sollicitudin in. Sed sit amet lacus porttitor, maximus
                        lacus nec, consectetur orci. Nam facilisis vulputate rutrum. Pellentesque non dui vitae lectus finibus
                        porttitor. Donec id elit congue, euismod dolor a, auctor libero. Vestibulum tincidunt ligula et massa
                        sollicitudin, id maximus turpis faucibus.Sed sit amet lacus porttitor, maximus lacus nec, consectetur
                        orci. </p>
                </article>
                <article class="col-xs-12 col-md-6 col-lg-6 text-left">
                    <h2 style="display: none">OK</h2>
                    <form>

                        <div class="form-group">
                            <label class="classecontato" for="nome">Nome:</label>
                            <input type="text" class="form-control" name="nome" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="tel">Telefone:</label>
                            <input type="number" class="form-control" name="tel" min="0" max="11" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea2">Mensagem:</label>
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </article>
            </div>
        </div>

    </main>

    <!-- Rodapé
    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <?php include 'includes/estrutura/footer.php'; ?>

</body>

</html>
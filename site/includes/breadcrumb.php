<!-- $nome-escola: nome da Escola (gráfico) -->

<!-- $nome-ativo: pagina atual -->

<!-- $nome-extra-a: nome do primeiro link extra -->
<!-- $link-extra-a: link do primeiro link extra -->

<!-- $nome-extra-b: nome do primeiro link extra -->
<!-- $link-extra-b: link do primeiro link extra -->
<nav class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active"><?= $titulo ?></li>
        <li class="dropdown">
            <a class="active dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <?= $subtitulo ?> <span class="caret"></span></a>
            <ul class="dropdown-menu basic-menu">
                <li><a href="<?= $linka ?>"><?= $nomea ?></a></li>
                <li><a href="<?= $linkb ?>"><?= $nomeb ?></a></li>
            </ul>
        </li>
    </ol>
</nav>

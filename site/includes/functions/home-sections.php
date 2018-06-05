<?php function criarSectionHome($escola,$nome, $autor, $frase, $imagem1, $titulo1, $texto1, $imagem2, $titulo2, $texto2, $imagem3, $titulo3, $texto3) { ?>

    <article class="section escolas <?= $escola ?>" id="<?= $escola ?>">
        <h2 style="display: none"><?= $escola ?></h2>
        <div class="container">
            <div class="escolas-individual">

                <!-- Coluna autor
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="col-xs-12 col-md-5 col-md-push-7">
                    <div class="autor-destaque person">
                        <a href="<?= $nome ?>-autor-destaque.php">
                            <div class="autor-descricao">
                                <div>
                                    <p class="autor-titulo"><?= $autor ?></p>
                                    <p class="autor-texto"><?= $frase ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Coluna materia
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="col-xs-12 col-md-7  col-md-pull-5">

                    <!-- Primeira linha
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="row materia">
                            <a href="<?= $nome ?>-contexto-historico.php">
                            <div class="materia-img" ><img src="<?= $imagem1 ?>" alt="Capa da matéria <?= $titulo1  ?>"></div>
                            <p class="titulo"><?= $titulo1  ?></p>
                            <p class="no-space"><?= $texto1  ?></p>
                            </a>
                    </div>

                    <!-- Segunda linha
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="row materia right">
                            <a href="<?= $nome ?>-principais-obras.php">
                            <div class="materia-img right" ><img src="<?= $imagem2 ?>" alt="Capa da matéria <?= $titulo2  ?>"></div>
                            <p class="titulo"><?= $titulo2  ?></p>
                            <p class="no-space"><?= $texto2  ?></p>
                            </a>
                    </div>

                    <!-- Terceira linha
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="row materia">
                            <a href="dicas-de-vestibular.php#<?= $nome ?>">
                            <div class="materia-img" ><img src="<?= $imagem3 ?>" alt="Capa da matéria <?= $titulo3  ?>"></div>
                            <p class="titulo"><?= $titulo3 ?></p>
                            <p class="no-space"><?= $texto3 ?></p>
                            </a>
                    </div>

                </div>
            </div>
        </div>
    </article>

<?php } ?>

<?php function divisaoHome($escola, $nome) { ?>

    <div class="container divisor <?= $escola ?>">
        <div class="container text-divisor <?= $escola ?>"> <?= $nome ?> </div>
    </div>

<?php } ?>

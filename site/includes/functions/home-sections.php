<?php function criarSectionHome($escola, $autor, $frase, $imagem1, $titulo1, $texto1, $imagem2, $titulo2, $texto2, $imagem3, $titulo3, $texto3) { ?>

    <article class="section escolas <?= $escola ?>" id="<?= $escola ?>">
        <h2 style="display: none"><?= $escola ?></h2>
        <div class="container">
            <div class="escolas-individual">

                <!-- Coluna autor
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="col-xs-12 col-md-5 col-md-push-7">
                    <div class="autor-destaque person">
                        <div class="autor-descricao">
                            <div>
                            <p class="autor-titulo"><?= $autor ?></p>
                            <p class="autor-texto"><?= $frase ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Coluna materia
                –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="col-xs-12 col-md-7  col-md-pull-5">

                    <!-- Primeira linha
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="row materia">
                            <div class="materia-img" ><img src="<?= $imagem1 ?>" alt="Imagem materia 1"></div>
                            <p class="titulo"><?= $titulo1  ?></p>
                            <p class="no-space"><?= $texto1  ?></p>
                    </div>

                    <!-- Segunda linha
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="row materia right">
                            <div class="materia-img right" ><img src="<?= $imagem2 ?>" alt="Imagem materia 2"></div>
                            <p class="titulo"><?= $titulo2  ?></p>
                            <p class="no-space"><?= $texto2  ?></p>
                    </div>

                    <!-- Terceira linha
                    –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <div class="row materia">
                            <div class="materia-img" ><img src="<?= $imagem3 ?>" alt="Imagem materia 3"></div>
                            <p class="titulo"><?= $titulo3 ?></p>
                            <p class="no-space"><?= $texto3 ?></p>
                    </div>

                </div>
            </div>
        </div>
    </article>

<?php } ?>

<?php function divisaoHome($escola) { ?>

    <div class="container divisor <?= $escola ?>"></div>

<?php } ?>
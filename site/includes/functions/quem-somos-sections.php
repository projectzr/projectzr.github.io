<?php function headerquemSomos () { ?>
<article class="escolas">
    <h1 style="display: none">Conteúdo</h1>
    <!-- Alunos -->
    <div class="container">
        <div class="section">
            <!-- Coluna 1
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <div class="col-xs-12 col-md-12">
                <!-- Primeira linha
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="row QM extra-space ">
                    <h1 class="titulo">Sobre o Portal</h1>
                    <div class="QM divisor "></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat repudiandae voluptates adipisci fugiat perspiciatis impedit consequatur nisi reiciendis eumsunt eligendi et commodi expedita, explicabosoluta, corporis quis ipsa, illo, incidunt vero!
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing lit.Debitisex iste eos? Vero ipsam minus,sed neque cupiditate expedita.Pariatur officia, accusamus nemoarchitecto at quia ex, totamlaboriosam sunt quasi impedit, corporis dolor labore. </p>
                     <p> Lorem ipsum dolor sit amet, consectetur adipisicing lit.Debitisex iste eos? Vero ipsam minus,sed neque cupiditate expedita.Pariatur officia, accusamus nemoarchitecto at quia ex, totamlaboriosam sunt quasi impedit, corporis dolor labore. </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-12">
                <div class="row QM">
                    <h1 class="titulo">A Equipe</h1>
                    <div class="QM divisor "></div>
                    <?php } ?>
                    <?php function quemSomos ($escola, $perfilImagem, $nome, $RA, $cargo, $descPessoal, $responsabilidade) { ?>
                    <!-- Segunda  linha
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
                    <!--Integrantes -->
                    <div class="col-xs-12 col-md-6 col-lg-4 extra-space">
                        <div class="QM thumbnail materia <?= $escola ?>">
                            <img src="<?= $perfilImagem ?> " alt="..." class="img-circle">
                            <div class="caption">
                                <h1 class="sub-titulo">
                                    <?= $nome ?>
                                        <br>
                                        <small>RA:
                                            <?= $RA ?>
                                        </small>
                                </h1>
                                <h2 class="sub-titulo">
                                    <?= $cargo ?>
                                </h2>
                                <p>
                                    <?= $descPessoal ?>
                                </p>
                                <p>
                                    <strong>Area Responsalvel:</strong>
                                    <?= $responsabilidade ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php function footerQuemSomos () { ?>
                </div>
            </div>
        </div>
    </div>
</article>
<?php }?>
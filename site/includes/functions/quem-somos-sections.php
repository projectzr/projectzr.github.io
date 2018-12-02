<?php function headerquemSomos () { ?>
<article class="escolas">
    <h1 style="display: none">Conteúdo</h1>
    <!-- Alunos -->
    <div class="container">
        <div class="section" id="conteudo">
            <!-- Coluna 1
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
            <div class="col-xs-12 col-md-12" tabindex="0">
                <!-- Primeira linha
            –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                <div class="row QM special-mid-space">
                    <h1 class="titulo">Sobre o Portal</h1>
                    <div class="QM divisor "></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat repudiandae voluptates adipisci fugiat perspiciatis impedit consequatur nisi reiciendis eumsunt eligendi et commodi expedita, explicabosoluta, corporis quis ipsa, illo, incidunt vero! Debitisex iste eos? Vero ipsam minus,sed neque cupiditate expedita. Pariatur officia, accusamus nemoarchitecto at quia ex, totamlaboriosam sunt quasi impedit, corporis dolor labore.Lorem ipsum dolor sit amet, consectetur adipisicing lit. </p>
                    <p class="special-no-space">Pariatur officia, accusamus nemoarchitecto at quia ex, totamlaboriosam sunt quasi impedit, corporis dolor labore.Lorem ipsum dolor sit amet, consectetur adipisicing lit. Debitisex iste eos? Vero ipsam minus,sed neque cupiditate expedita. </p>
                </div>
            </div>
            <div class="col-xs-12 col-md-12" tabindex="0">
                <div class="row QM">
                    <h1 class="titulo" tabindex="0">A Equipe</h1>
                    <div class="QM divisor "></div>
                    <div class="QM flex">
                        <?php } ?>
                        <?php function quemSomos ($escola, $perfilImagem, $altImagem,  $nome, $RA, $cargo, $descPessoal, $responsabilidade) { ?>
                        <!-- Segunda  linha
                        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                        <!--Integrantes -->

                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 extra-space QM noflex">
                            <section tabindex="0">
                                <div class="QM thumbnail materia <?= $escola ?>">
                                    <img src="<?= $perfilImagem ?> " alt=<?=$altImagem?> class="img-circle">
                                    <div class="caption">
                                        <h2 class="sub-titulo">
                                            <?= $nome ?>
                                                <br>
                                                <small>RA:
                                                <?= $RA ?>
                                            </small>
                                        </h2>
                                        <h3 class="sub-titulo">
                                            <?= $cargo ?>
                                        </h3>
                                        <p>
                                            <?= $descPessoal ?>
                                        </p>
                                        <p>
                                            <strong>Área Responsável:</strong>
                                            <?= $responsabilidade ?>
                                        </p>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <?php } ?>

                        <?php function footerQuemSomos () { ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php }?>

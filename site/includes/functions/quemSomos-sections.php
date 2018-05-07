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
            <div class="row SobrePortal extra-space ">
                <h1 class="titulo">Sobre o Portal</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum repellat repudiandae voluptates adipisci ad fugiat perspiciatis impedit consequatur nisi reiciendis eum sunt eligendi et commodi expedita,
                explicabo soluta, corporis quis ipsa, illo, incidunt vero!
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis ex iste eos? Vero ipsam minus,sed neque cupiditate expedita. Pariatur officia, accusamus nemo architecto at quia ex, totam laboriosam sunt quasi impedit, corporis dolor labore. </p>
                </div>
        </div>



        <div class="row equipe">

            <h1 class="titulo">A Equipe</h1>

<?php } ?>

<?php function quemSomos ($escola, $perfilImagem, $nome, $RA, $cargo, $descPessoal, $responsabilidade) { ?>
<!-- Segunda  linha
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
<!--Integrantes -->
<div class="col-xs-12 col-md-6 col-lg-4 extra-space">
    <div class="thumbnail materia <?= $escola ?>">
        <img src="<?= $perfilImagem ?> " alt="..." class="img-circle">
        <div class="caption">
            <h1 class="sub-titulo">
                <?= $nome ?><br>
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
        </article>
    <?php 
}
        ?>
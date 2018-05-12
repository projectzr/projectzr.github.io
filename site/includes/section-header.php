    <header class="inicio" id="inicio">
        <div class="parallax-window" data-parallax="scroll" data-image-src="img/header-home.jpg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12" style="margin: 97px 0 23px 0;">
                        <p class="title"><?= $titulo ?></p>
                        <?php 
                        if(isset($subtitulo)){
                            echo '<p class="subtitle">'.$subtitulo.'</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
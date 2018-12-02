<nav id="menu" class="navbar navbar-custom navbar-fixed-top navbar-inverse">
    <a href="#conteudo" class="sr-only sr-only-focusable" tabindex="0">Pular para o Conteúdo </a>
    <div class="container">

        <div class="navbar-header">

            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-brand" href="index.php" aria-label="Página Inicial">
                <!-- sombra, corpo, verde, amarelo, width, height -->
                <?php logoGenerate('light', '40px', '100%'); ?>
            </a>
            <!--
            <a class="navbar-brand text-brand" href="index.php">
                Brasil Literário
            </a>
-->
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">

                <?php 
                function checkURL($pagina){
                    $page = basename($_SERVER['PHP_SELF']);  
                    if($page == $pagina){ echo 'active'; } 

                    // Rever possível uso de regex
                    if($pagina == 'escolas.php') {
                        $escolas = array(
                            "romantismo-autor-destaque.php", 
                            "romantismo-contexto-historico.php", 
                            "romantismo-principais-obras.php",
                            "realismo-autor-destaque.php", 
                            "realismo-contexto-historico.php", 
                            "realismo-principais-obras.php",
                            "simbolismo-autor-destaque.php", 
                            "simbolismo-contexto-historico.php", 
                            "simbolismo-principais-obras.php",
                            "pre-modernismo-autor-destaque.php", 
                            "pre-modernismo-contexto-historico.php", 
                            "pre-modernismo-principais-obras.php",
                            "modernismo-autor-destaque.php", 
                            "modernismo-contexto-historico.php", 
                            "modernismo-principais-obras.php",
                            "pos-modernismo-autor-destaque.php", 
                            "pos-modernismo-contexto-historico.php", 
                            "pos-modernismo-principais-obras.php"
                        ); 
                        if (in_array($page, $escolas)) { echo 'active'; }
                    }
                    
                    if($pagina == 'institucional.php') {
                        $institucional = array(
                            "quem-somos.php", 
                            "dicas-de-vestibular.php", 
                            "academia.php",
                            "normas.php"
                        ); 
                        if (in_array($page, $institucional)) { echo 'active'; }
                    }
                }
                ?>

                <li class="dropdown mega-dropdown <?php checkURL('escolas.php');?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Escolas Literárias <span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-6 col-lg-4">
                            <ul>
                                <li class="dropdown-header escola1-navid" data-type="drop-escola" data-target="drop-escola1"><span><h2 tabindex="0">Romantismo</h2></span>
                                    <ul class="drop-escola nav-hide" id="drop-escola1">
                                        <li><a href="romantismo-contexto-historico.php">Romantismo e a Independência</a></li>
                                        <li><a href="romantismo-principais-obras.php">As Grandes Obras</a></li>
                                        <li><a href="romantismo-autor-destaque.php">Autor de destaque: José de Alencar</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>

                        <li class="col-sm-6 col-lg-4">
                            <ul>
                                <li class="dropdown-header escola2-navid" data-type="drop-escola" data-target="drop-escola2"><span><h2 tabindex="0">Realismo</h2></span>
                                    <ul class="drop-escola nav-hide" id="drop-escola2">
                                        <li><a href="realismo-contexto-historico.php">O Brasil das ideias liberais</a></li>
                                        <li><a href="realismo-principais-obras.php">Realismo no Brasil</a></li>
                                        <li><a href="realismo-autor-destaque.php">Autor de destaque: Machado de Assis</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-6 col-lg-4">
                            <ul>
                                <li class="dropdown-header escola3-navid" data-type="drop-escola" data-target="drop-escola3"><span><h2 tabindex="0">Simbolismo</h2></span>
                                    <ul class="drop-escola nav-hide" id="drop-escola3">
                                        <li><a href="simbolismo-contexto-historico.php">O Início da Belle Époque</a></li>
                                        <li><a href="simbolismo-principais-obras.php">Obras da Época</a></li>
                                        <li><a href="simbolismo-autor-destaque.php">Autor de destaque: Cruz e Sousa</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-6 col-lg-4">
                            <ul>
                                <li class="dropdown-header escola4-navid" data-type="drop-escola" data-target="drop-escola4"><span><h2 tabindex="0">Pré-Modernismo</h2></span>
                                    <ul class="drop-escola nav-hide" id="drop-escola4">
                                        <li><a href="pre-modernismo-contexto-historico.php">Consolidação da República</a></li>
                                        <li><a href="pre-modernismo-principais-obras.php">Manifestação dos Autores</a></li>
                                        <li><a href="pre-modernismo-autor-destaque.php">Autor de destaque: Euclides da Cunha</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-6 col-lg-4">
                            <ul>
                                <li class="dropdown-header escola5-navid" data-type="drop-escola" data-target="drop-escola5"><span><h2 tabindex="0">Modernismo</h2></span>
                                    <ul class="drop-escola nav-hide" id="drop-escola5">
                                        <li><a href="modernismo-contexto-historico.php">Semana da Arte Moderna</a></li>
                                        <li><a href="modernismo-principais-obras.php">Principais Obras</a></li>
                                        <li><a href="modernismo-autor-destaque.php">Autor de destaque: Mário de Andrade</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-6 col-lg-4">
                            <ul>
                                <li class="dropdown-header escola6-navid" data-type="drop-escola" data-target="drop-escola6"><span><h2 tabindex="0">Pós-Modernismo</h2></span>
                                    <ul class="drop-escola nav-hide" id="drop-escola6">
                                        <li><a href="pos-modernismo-contexto-historico.php">A Guerra, A História</a></li>
                                        <li><a href="pos-modernismo-principais-obras.php">Obras que Marcaram</a></li>
                                        <li><a href="pos-modernismo-autor-destaque.php">Autor de destaque: Guimarães Rosa</a></li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="<?php checkURL('agenda.php');?>"><a href="agenda.php">Agenda</a></li>
                <li class="<?php checkURL('contato.php');?>"><a href="contato.php">Contato</a></li>
                <li class="dropdown <?php checkURL('institucional.php');?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    O Portal<span class="caret"></span></a>
                    <ul class="dropdown-menu basic-menu">
                        <li><a href="dicas-de-vestibular.php">Dicas de Vestibular</a></li>
                        <li><a href="academia.php">Academia Brasileira de Letras</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="quem-somos.php">Quem somos</a></li>
                        <li><a href="normas.php">Normas de utilização</a></li>
                    </ul>
                </li>
                <li class="<?php checkURL('mapa.php');?>"><a href="mapa.php">Mapa</a></li>
            </ul>
            <div class="navbar-text dia-nav">
                <a href="#" class="nav-button" id="addContrast" aria-label="Ativar Alto Contraste" onclick="addContrast()">C</a>
                <a href="#" class="nav-button" id="remContrast" aria-label="Desativar Alto Contraste" onclick="remContrast()" style="display:none;">C</a>
                <a href="#" class="nav-button" id="font-minus" aria-label="Diminuir Fonte" onclick="fontMinus()">-a</a>
                <a href="#" class="nav-button" id="font-max" aria-label="Aumentar Fonte" onclick="fontMax()">+A</a>
            </div>
        </div>
        <!-- /.nav-collapse -->
    </div>
</nav>

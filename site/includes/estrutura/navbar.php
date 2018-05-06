    <nav id="menu" class="navbar navbar-custom navbar-fixed-top navbar-inverse">
        <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Brasil Literário</a>
        </div>

        <div class="collapse navbar-collapse js-navbar-collapse">
            <ul class="nav navbar-nav">
                
                <?php 
                function checkURL($pagina){
                    $page = basename($_SERVER['PHP_SELF']); 
                    if($page == $pagina){ echo 'active';}

                    if($pagina == 'escolas.php') {
                        if($page == 'autor-destaque.php'){ echo 'active';}
                        if($page == 'contexto-histórico.php'){ echo 'active';}
                        if($page == 'principais-obras.php'){ echo 'active';}
                    }
                }
                ?>
                
                <li class="dropdown mega-dropdown <?php checkURL('escolas.php');?>">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Escolas Literárias <span class="caret"></span></a>
                    <ul class="dropdown-menu mega-dropdown-menu">
                        <li class="col-sm-4 col-md-3">
                            <ul>
                                <li class="dropdown-header escola1-navid" id="drop-escola" data-target="drop-escola1">Romantismo</li>
                                <div class="drop-escola nav-hide" id="drop-escola1">
                                    <li><a href="#">Autor de destaque: Nome Sobrenome</a></li>
                                    <li><a href="#">Obras mais importantes</a></li>
                                    <li><a href="#">Contexto Histórico da época</a></li>
                                </div>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-4 col-md-3">
                            <ul>
                                <li class="dropdown-header escola2-navid" id="drop-escola" data-target="drop-escola2">Realismo</li>
                                <div class="drop-escola nav-hide" id="drop-escola2">
                                    <li><a href="#">Autor de destaque: Nome Sobrenome</a></li>
                                    <li><a href="#">Obras mais importantes</a></li>
                                    <li><a href="#">Contexto Histórico da época</a></li>
                                </div>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-4 col-md-3">
                            <ul>
                                <li class="dropdown-header escola3-navid" id="drop-escola" data-target="drop-escola3">Simbolismo</li>
                                <div class="drop-escola nav-hide" id="drop-escola3">
                                    <li><a href="#">Autor de destaque: Nome Sobrenome</a></li>
                                    <li><a href="#">Obras mais importantes</a></li>
                                    <li><a href="#">Contexto Histórico da época</a></li>
                                </div>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-4 col-md-3 ">
                            <ul>
                                <li class="dropdown-header escola4-navid" id="drop-escola" data-target="drop-escola4">Pré-Modernismo</li>
                                <div class="drop-escola nav-hide" id="drop-escola4">
                                    <li><a href="#">Autor de destaque: Nome Sobrenome</a></li>
                                    <li><a href="#">Obras mais importantes</a></li>
                                    <li><a href="#">Contexto Histórico da época</a></li>
                                </div>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-4 col-md-3">
                            <ul>
                                <li class="dropdown-header escola5-navid" id="drop-escola" data-target="drop-escola5">Modernismo</li>
                                <div class="drop-escola nav-hide" id="drop-escola5">
                                    <li><a href="#">Autor de destaque: Nome Sobrenome</a></li>
                                    <li><a href="#">Obras mais importantes</a></li>
                                    <li><a href="#">Contexto Histórico da época</a></li>
                                </div>
                                <li class="divider"></li>
                            </ul>
                        </li>
                        <li class="col-sm-3">
                            <ul>
                                <li class="dropdown-header escola6-navid" id="drop-escola" data-target="drop-escola6">Pós-Modernismo</li>
                                <div class="drop-escola nav-hide" id="drop-escola6">
                                    <li><a href="#">Autor de destaque: Nome Sobrenome</a></li>
                                    <li><a href="#">Obras mais importantes</a></li>
                                    <li><a href="#">Contexto Histórico da época</a></li>
                                </div>
                                <li class="divider"></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                   
                <li class="<?php checkURL('contato.php');?>"><a href="<?= $path ?>contato.php">Contato</a></li>
                <li class="<?php checkURL('agenda.php');?>"><a href="<?= $path ?>agenda.php">Agenda</a></li>
                <li class="<?php checkURL('institucional.php');?>"><a href="<?= $path ?>institucional.php">Institucional</a></li>
            </ul>
            <span class="navbar-text dia-nav" id="data-atual"></span>
        </div>
        <!-- /.nav-collapse -->
        </div>
    </nav>

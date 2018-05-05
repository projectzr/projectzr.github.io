    <nav id="menu" class="navbar navbar-custom navbar-fixed-top navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <a href="#inicio">Portal</a>
                </div>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
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
                    
                    <li class="<?php checkURL('index.php');?>"><a href="index.php">Home</a></li>
                    
                    <li class="dropdown <?php checkURL('escolas.php');?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Escolas<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="exemplo.php">Romantismo</a></li>
                            <li><a href="exemplo.php">Realismo</a></li>
                            <li><a href="exemplo.php">Simbolismo</a></li>
                            <li><a href="exemplo.php">Pré-Modernismo</a></li>
                            <li><a href="exemplo.php">Modernismo </a></li>
                            <li><a href="exemplo.php">Pós-Modernismo</a></li>
                        </ul>
                    </li>
                    
                    <li class="<?php checkURL('contato.php');?>"><a href="<?= $path ?>contato.php">Contato</a></li>
                    <li class="<?php checkURL('agenda.php');?>"><a href="<?= $path ?>agenda.php">Agenda</a></li>
                    <li class="<?php checkURL('institucional.php');?>"><a href="<?= $path ?>institucional.php">Institucional</a></li>
                </ul>
            </div>
        </div>
    </nav>
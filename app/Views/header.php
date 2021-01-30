<header class="">
    <div class="">
        <nav class="navbar navbar-expand-sm navbar-light nav-menu bg-dark">
            <div class="logo">
                <a class="navbar-brand text-light float-left" href="<?= URL ?>/home/sobre"><img src="<?= URL ?>/public/img/ico.png" alt="Sobre o desenvolvedor" width="40px" height="40px">&nbsp;&nbsp;Gestão-Escolar</a>
            </div>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="<?= URL ?>/home/">Início <span class="sr-only">(current)</span></a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= URL ?>/usuarios/login">Entrar</a>
                    </li>
        
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= URL ?>/usuarios/cadastrar">Cadastrar-se</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="dropdownId" data-target="#dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opções</a>
                        <div class="dropdown-menu" id="menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <!-- <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                    <button class="btn btn-outline-info text-white my-2 my-sm-0" type="submit">Buscar</button>
                </form> -->
            </div> 
        </nav>
    </div>
</header>

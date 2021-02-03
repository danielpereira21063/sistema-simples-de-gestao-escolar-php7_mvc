<style>
    .menu:hover {
        background-color: #345;
    }

    #menu-direita {
        float: right;
    }
</style>
<div class="col-md-12">
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <?php if(!Sessao::logado()): ?>
    <a class="navbar-brand" href="<?=URL?>"><img class="img-responsive img-fluid" width="40px"
            src="<?=URL?>/public/img/icons/iconfinder-home.png" alt=""> &nbsp;Sistema-Escolar</a>
    <?php else: ?>
    <a class="navbar-brand" href="<?=URL?>/usuarios"><img class="img-responsive img-fluid" width="40px"
            src="<?=URL?>/public/img/icons/iconfinder-home.png" alt=""> &nbsp;Sistema-Escolar</a>
    <?php endif; ?>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
        aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <?php if(Sessao::logado()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>/usuarios"><img src="<?=URL?>/public/img/icons/home.png"> Início<span class="sr-only">(current)</span></a>
            </li>
            <?php endif; ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Menu</a>
                <div class="dropdown-menu bg-dark" aria-labelledby="dropdownId">
                    <a class="dropdown-item border-bottom menu" href="<?=URL?>/usuarios/login"><span
                            class="btn btn-block btn-primary text-default">Entrar com outra conta</span></a>
                    <a class="dropdown-item menu" href="<?=URL?>/usuarios/cadastrar"><span class="btn btn-block btn-primary text-default">Criar
                            uma nova conta</span></a>
                </div>
            </li>
            <?php if(!Sessao::logado()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>">Início<span class="sr-only">(current)</span></a>
            </li>
            <?php endif; ?>

            <?php if(!Sessao::logado()): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>/usuarios/login">Entrar</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>/usuarios/cadastrar">Cadastrar-se<span
                        class="sr-only">(current)</span></a>
            </li>

            <?php endif; ?>
    </div>
    <!-- <div class="col-sm-2"></div> -->
    <!-- <div class="col-sm-6"></div> -->
    <!-- <div class="col-sm-2"></div>    -->

    <div class="col-md- menu-direita">
        <?php if(Sessao::logado()): ?>
        <!-- <p> -->

        <span class="text-light float-right mr"><a href="<?=URL?>/usuarios/conta"></a><?=Sessao::nomeUsuario()?>&nbsp;

            <a class="btn btn-danger btn-sm float-right ml-2" href="<?=URL?>/usuarios/sair">Sair</a>
            <a class="btn btn-primary btn-sm float-right ml-1 mt-0 mb-0" href="<?=URL?>/usuarios/perfil">Ver perfil</a>
        </span>
        <!-- </p> -->
        <?php endif; ?>
    </div>
    </ul>
    </div>
</nav>
</div>
<style>
    .icone {
        width: 20px;
        height: 20px;
    }
    #navPrincipal {
        background: #1f2122;
    }
    /* #username {
        color: white;
    } */
</style>


    <nav class="navbar navbar-expand-lg navbar-dark" id="navPrincipal">
        <a class="navbar-brand" href="<?=URL?>">
            <img class="img-brand img-fluide" width="35px" src="<?=URL?>/public/img/icons/iconfinder-home.png" alt="">
            Sistema-Escolar
        </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarSite"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>"><img class="icone" src="<?=URL?>/public/img/icons/home.png" alt=""> Inicio&nbsp;</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/pagina/sobre"><img class="icone" src="<?=URL?>/public/img/icons/admin_person_user_man-ico.png" alt=""> Sobre</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/usuarios/login"><img class="icone" src="<?=URL?>/public/img/icons/login.png" alt="">&nbsp;Entrar</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/usuarios/cadastrar"><img class="icone" src="<?=URL?>/public/img/icons/cadastrar-ico.png" alt="">&nbsp;Cadastrar-se</a>
                </li>

                <!-- <div class="row" style="background-color: gray;">&nbsp; -->
                    <?php if(Sessao::logado()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-success" href="<?=URL?>/usuarios/perfil"><span id="username"><?=Sessao::primeiroNomeUser()[0]?>&nbsp;</span><img class="icone" src="<?=URL?>/public/img/icons/user-man.png"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="<?=URL?>/usuarios/sair">Sair&nbsp;<img class="icone" src="<?=URL?>/public/img/icons/logout.png" alt=""></a>
                    </li>
                    <?php endif; ?>
                <!-- </div> -->

            </ul>    
        </div>
    </nav>


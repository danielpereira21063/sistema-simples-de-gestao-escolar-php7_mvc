<style>
    .icone {
        width:16px;
        height: 16;
    }
    #navPrincipal {
        background: #00161d;
        opacity: .97;
    }
    /* #username {
        color: white;
    } */
</style>

<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark" id="navPrincipal">
        <a class="navbar-brand" href="">
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
                    <a class="nav-link" href="<?=Sessao::logado() ? URL.'/usuarios' : URL?>"><img class="icone" src="<?=URL?>/public/img/icons/home.png" alt=""> Inicio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/pagina/sobre"><img class="icone" src="<?=URL?>/public/img/icons/about.png" alt=""> Sobre</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/usuarios/login"><img class="icone" src="<?=URL?>/public/img/icons/admin_person_user_man.png" alt=""> Entrar</a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/usuarios/cadastrar"><img class="icone" src="<?=URL?>/public/img/icons/admin_person_user_man.png" alt=""> Cadastrar-se</a>
                </li>

                <div>&nbsp;&nbsp;&nbsp;</div>

                <?php if(Sessao::logado()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/usuarios/perfil"><span id="username"><img class="icone" src="<?=URL?>/public/img/icons/user-icon.png"> <?=Sessao::nomeUsuario()?></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>/usuarios/sair"><img class="icone" src="<?=URL?>/public/img/icons/youtube-logo.png" alt=""> Sair</a>
                </li>
                <?php endif; ?>


            </ul>    
        </div>
    </nav>

    <!-- <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-iem active">
                <img class="d-block img-fluid" src="//URL?>/public/img/carousel/carousel-1.jpg" alt="">
                <div class="carousel-caption">
                    <h1>Primeiro slide</h1>
                    <p>Conteúdo do primeiro slide</p>
                </div>
            </div>

            <div class="carousel-iem">
                <img class="d-block img-fluid" src="//URL?>/public/img/carousel/carousel-2.jpg" alt="">
                <div class="carousel-caption">
                    <h1>Segundo slide</h1>
                    <p>Conteúdo do segundo slide</p>
                </div>
            </div>

            <div class="carousel-iem">
                <img class="d-block img-fluid" src="//URL?>/public/img/carousel/carousel-3.jpg" alt="">
                <div class="carousel-caption">
                    <h1>Terceiro slide</h1>
                    <p>Conteúdo do terceiro slide</p>
                </div>
            </div>
        </div>
    </div> -->
</div>



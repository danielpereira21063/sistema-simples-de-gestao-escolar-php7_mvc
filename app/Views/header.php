<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href=""><img class="img-responsive img-fluid" width="40px" src="<?=URL?>/public/img/ico.png" alt=""> &nbsp;&nbsp;Sistema-escolar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <?php if(isset($_SESSION['usuario_id'])): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>">Início <span class="sr-only">(current)</span></a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>/usuarios/cadastrar">Cadastrar-se <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=URL?>/usuarios/login">Entrar</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Opções</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="#">Action 1</a>
                    <a class="dropdown-item" href="#">Action 2</a>
                </div>
            </li>
        </ul>
        <div class="col-sm-4">
          <?php if(isset($_SESSION['usuario_id'])): ?>
            <span class="text-light"><?= $_SESSION['usuario_nome']; ?></span>
            <a class="btn text-light btn-sm float-center" href="<?=URL?>/usuarios/conta" style="background: blue;">Meu perfil</a>
            <a class="btn btn-danger btn-sm float-center" href="<?=URL?>/usuarios/sair">Sair</a>
          <?php endif; ?>
        </div>
    </div>
</nav>
<!-- 
<header>
   <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
         <div class="row">
         
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Sobre o desenvolvedor</h4>
              <p class="text-muted">Daniel Pereria Sanches</p>
              <div class="col-sm-3">
                <img src="http://localhost/sistema-escolar/public/img/dev/dev-ico.jpg" alt="" class="navbar-brand img-fluid img-responsive rounded-circle" style="width: 50px, height: 50px">
              </div>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contato</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Me siga no Twitter</a></li>
                <li><a href="#" class="text-white">Curta no Facebook</a></li>
                <li><a href="#" class="text-white">Me envie um e-mail</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>Álbum</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div> 
   </div>
</header> -->
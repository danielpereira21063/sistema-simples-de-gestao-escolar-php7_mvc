<?php if(!Sessao::logado()):
   
   Url::redirecionar('usuarios/login'); ?>

<?php else:
   Paginas::alterarHeader('Perfil do usuário', (URL.'/public/img/icons/user-icon.png'));
?>

<style>
   label {
      font-weight: bolder;
   }
</style>

<div class="container-fluid mt-5 p-3" style="max-width: 720px">
   <div class="card-body">
      <div class="card">
         <div class="card-header bg-dark">
            <p class="text-light text-center">Perfil do usuário</p>
            <div class="col-md-5 col-lg-5 col-sm-5 float-left mb-2">
               <a class="btn btn-sm btn-block btn-primary" href="<?=URL?>/usuarios/perfil/editar">Editar</a>
            </div>
            <div class="col-md-5 col-lg-5 col-sm-5 float-right mb-2">
               <a class="btn btn-sm btn-block btn-danger" href="<?=URL?>/usuarios/perfil/excluir/<?=Sessao::idUsuarioLogado();?>">Excluir conta</a>
            </div>
         </div>

         <div class="card-body mb-2" style="background-color: #eee;">
            <div class="card-text">
                  <label for="nome">Nome de usuário:</label>
                  <h3 class="form-control mb-4" name="nome" id="nome" placeholder="Insira seu novo nome de usuario"><?=$_SESSION['usuario_nome'] ?? ''?></h3>
                  <label for="nome">Endereço de e-mail:</label>
                  <h3 class="form-control mb-4" value="" type="text" name="nome" id="nome"><?=$_SESSION['usuario_email'] ?? ''?></h3>
            </div>
         </div>
      </div>
   </div>
</div>

<?php endif; ?>
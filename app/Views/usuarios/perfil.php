<style>
   label {
      font-weight: bolder;
   }
</style>

<div class="container-fluid" style="max-width: 700px">
   <div class="card-body">
      <div class="card">
         <div class="card-header bg-dark">
            <p class="text-light text-center">Perfil do usuario</p>
            <div class="col-md-6 float-left mb-2">
               <a class="btn btn-sm btn-block btn-primary" href="<?=URL?>/usuarios/editar">Editar</a>
            </div>
            <div class="col-md-6 float-right mb-2">
               <a class="btn btn-sm btn-block btn-danger" href="<?=URL?>/usuarios/excluir">Excluir conta</a>
            </div>
         </div>

         <div class="card-body mb-2" style="background-color: #eee;">
            <div class="card-text">
                  <label for="nome">Nome de usuario:</label>
                  <h3 class="form-control mb-4" name="nome" id="nome" placeholder="Insira seu novo nome de usuario"><?=$_SESSION['usuario_nome'] ?? ''?></h3>
                  <label for="nome">Endereço de e-mail:</label>
                  <h3 class="form-control mb-4" value="" type="text" name="nome" id="nome"><?=$_SESSION['usuario_email'] ?? ''?></h3>
            </div>
         </div>
      </div>
   </div>
</div>

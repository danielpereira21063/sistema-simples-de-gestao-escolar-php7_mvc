<style>
   label {
      font-weight: bolder;
   }
</style>

<div class="container" style="max-width: 700px">
   <div class="card-body">
      <div class="card">
         <div class="card-header bg-dark">
            <p class="text-light">Perfil do usuario</p>
         </div>

         <div class="card-body mb-2" style="background-color: #eee;">
            <div class="card-text">
               <form action="<?=URL?>/usuarios/editar" method="POST">
                  <label for="nome">Nome de usuario:</label>
                  <input class="form-control mb-4" value="<?=$_SESSION['usuario_nome'] ?? ''?>" type="text" name="nome"
                     id="nome" placeholder="Insira seu novo nome de usuario">
                  <label for="email">Endereço de e-mail:</label>
                  <input class="form-control mb-4" value="<?=$_SESSION['usuario_email'] ?? ''?>" type="text"
                     name="email" id="email" placeholder="Insira seu novo endereço de e-mail">

                  <label for="senha_atual">Senha atual:</label>
                  <input class="form-control mb-4" type="password" name="senha_atual" id="senha_atual"
                     placeholder="Insira sua senha atual">

                  <label for="nova_senha">Nova senha:</label>
                  <input class="form-control" type="password" name="nova_senha" id="nova_senha"
                     placeholder="Insira sua nova senha">

                  <input class="btn btn-md btn-block btn-primary mt-3" type="submit" value="Salvar alterações">
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
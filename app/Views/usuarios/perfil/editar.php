<?php if(!Sessao::logado()):
   
   Url::redirecionar('usuarios/login'); ?>

<?php else:
   Paginas::alterarHeader('Editar perfil', (URL.'/public/img/icons/user-icon.png'));
?>

<style>
   label {
      font-weight: bolder;
   }
</style>

<div class="container mt-5" style="max-width: 700px">
   <div class="card-body">
      <div class="card">
         <div class="card-header bg-dark">
            <p class="text-light text-center m-auto">Perfil do usuário</p>
         </div>

         <div class="card-body mb-2" style="background-color: #eee;">
            <div class="card-text">
               <form action="<?=URL?>/usuarios/perfil/editar" method="POST">
                  <div class="form-group mb-4">
                     <label for="nome">Nome de usuário:</label>
                     <input class="form-control <?= isset($dados['nome_erro']) ? 'is-invalid' : '' ?>"
                        value="<?=isset($dados['nome']) ? $dados['nome'] : $_SESSION['usuario_nome']?>" type="text" name="nome" id="nome"
                        placeholder="Insira seu novo nome de usuario">
                     <div class="invalid-feedback text-center">
                        <?= $dados['nome_erro'] ?? '' ?>
                     </div>
                  </div>

                  <div class="form-group mb-4">
                     <label for="email">Endereço de e-mail:</label>
                     <input class="form-control <?= isset($dados['email_erro']) ? 'is-invalid' : '' ?>"
                        value="<?=isset($dados['email']) ? $dados['email'] : $_SESSION['usuario_email']?>" type="text" name="email" id="email"
                        placeholder="Insira seu novo endereço de e-mail">
                     <div class="invalid-feedback text-center">
                        <?= $dados['email_erro'] ?? '' ?>
                     </div>
                  </div>

                  <div class="form-group mb-4">
                     <label for="senha_atual">Senha atual:</label>
                     <input class="form-control <?= isset($dados['senha_atual_erro']) ? 'is-invalid' : '' ?>"
                        type="password" name="senha_atual" id="senha_atual" placeholder="Insira sua senha atual"
                        value="<?= $dados['senha_atual'] ?? '' ?>">
                     <div class="invalid-feedback text-center">
                        <?= $dados['senha_atual_erro'] ?? '' ?>
                     </div>
                  </div>

                  <div class="form-group mb-4">
                     <label for="nova_senha">Nova senha:</label>
                     <input class="form-control <?= isset($dados['nova_senha_erro']) ? 'is-invalid' : '' ?>"
                        type="password" name="nova_senha" id="nova_senha" placeholder="Insira sua nova senha"
                        value="<?= $dados['nova_senha'] ?? '' ?>">
                     <div class="invalid-feedback text-center">
                        <?= $dados['nova_senha_erro'] ?? '' ?>
                     </div>
                  </div>



                  <input class="btn btn-md btn-block btn-primary mt-3" type="submit" value="Salvar alterações">
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<?php endif; ?>
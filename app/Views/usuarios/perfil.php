<style>
	label {
  		font-weight: bolder;
	}
</style>

<div class="container" style="max-width: 700px">
   <div class="card-body align">
            <div class="card">
               <div class="card-header bg-dark">
                    <p class="text-light">Perfil do usuario</p>
               </div>

               <div class="card-body mb-2" style="background-color: #ddd;">
                  <div class="card-text">
                    <form action="">
                        <label for="nome">Nome de usuario:</label>
                        <input class="form-control mb-4" value="<?=$_SESSION['usuario_nome'] ?? ''?>" type="text" name="nome" id="nome" placeholder="Insira seu novo nome de usuario">
                        <label for="nome">Endereço de e-mail:</label>
                        <input class="form-control mb-4" value="<?=$_SESSION['usuario_email'] ?? ''?>" type="text" name="email" id="email" placeholder="Insira seu novo endereço de e-mail">
                        
                        <label for="nome">Senha atual:</label>
                        <input class="form-control mb-4" value="" type="text" name="email" id="email" placeholder="Insira sua senha atual">

                        <label for="nome">Nova senha:</label>
                        <input class="form-control" value="" type="text" name="email" id="email" placeholder="Insira sua nova senha">

                        <input class="btn btn-md btn-block btn-primary mt-3" type="submit" value="Salvar alterações">
                    </form>
                  </div>
               </div>
            </div>
            <hr>
      </div>
</div>

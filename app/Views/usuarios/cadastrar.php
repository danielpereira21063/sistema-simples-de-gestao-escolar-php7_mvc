<?php Paginas::alterarHeader('Criar uma conta', URL.'/public/img/icons/cadastrar-ico.png'); ?>

<style>
	label {
  		font-weight: bolder;
	}
</style>
<div class="content mt-5">
	 <div class="container p-3">
		<div class="row">
		  <div class="col-md-8 contents">
			 <div class="row justify-content-center">
				<div class="col-md-8 justify-content-center p-4">
				  <div class="mb-4">
				  <h3 class="text-center" style="font-weight: bolder;">Criar uma conta</h3>
				  <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
				</div>
				<form action="<?= URL ?>/usuarios/cadastrar" method="POST">
					<div class="form-group">
						<label for="nome">Nome: <sup class="text-danger">*</sup></label>
						<input type="text" name="nome" id="nome" class="form-control <?= isset($dados['nome_erro']) ? 'is-invalid' : '' ?>" value="<?= $dados['nome'] ?? '' ?>" placeholder="Digite seu nome">
						<div class="invalid-feedback text-center">
							<?= $dados['nome_erro'] ?? '' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="email">E-mail: <sup class="text-danger">*</sup></label>
						<input type="text" name="email" id="email" class="form-control <?= isset($dados['email_erro']) ? 'is-invalid' : '' ?>" value="<?= $dados['email'] ?? '' ?>" placeholder="Digite seu e-mail">
						<div class="invalid-feedback text-center">
							<?= $dados['email_erro'] ?? '' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="senha">Senha: <sup class="text-danger">*</sup></label>
						<input type="password" name="senha" id="senha" class="form-control <?= isset($dados['senha_erro']) ? 'is-invalid' : '' ?>" value="<?= $dados['senha'] ?? '' ?>" placeholder="Crie uma senha">
						<div class="invalid-feedback text-center">
							<?= $dados['senha_erro'] ?? '' ?>
						</div>
					</div>

					<div class="form-group">
						<label for="confirm_senha">Confirme a senha: <sup class="text-danger">*</sup></label>
						<input type="password" name="confirm_senha" id="confirm_senha" class="form-control <?= isset($dados['confirm_senha_erro']) ? 'is-invalid' : '' ?>" value="<?= $dados['confirm_senha'] ?? '' ?>" placeholder="Confirme sua senha">
						<div class="invalid-feedback text-center">
							<?= $dados['confirm_senha_erro'] ?? '' ?>
						</div>
					</div>

				  <input type="submit" value="Cadastrar" class="btn btn-block btn-primary" style="background: blue;">

				  <div class="col-md-12 mt-2 text-center">
						<a class="text-primary" href="<?= URL ?>/usuarios/login"><p>Tem uma conta? Faça login</p></a>
					</div>
				</form>
				</div>
			 </div>

		  </div>
		  <div class="col-md-4 m-auto">
			 <img src="<?= URL ?>/public/img/background-ico.svg" alt="Image" class="img-fluid">
		  </div>
		</div>
	 </div>
  </div>
</div>
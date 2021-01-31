<div class="content p-5">
	<div class="container">
    	<div class="row">
			<div class="col-md-6">
				<img src="<?= URL ?>/public/img/background-ico.svg" alt="" class="img-fluid">
			</div>
			<div class="col-md-6 contents mt-5">
				<div class="row justify-content-center">
					<div class="col-md-8 justify-content-center p-4">
					<div class="mb-4">
						<h3 class="text-center">Entrar no sistema</h3>
						<!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
					</div>
					<form action="<?= URL ?>/usuarios/login" method="POST">
						<div class="form-group">
							<label for="email">E-mail: <sup class="text-danger">*</sup></label>
							<input type="text" name="email" id="email" class="form-control <?= isset($dados['email_erro']) ? 'is-invalid' : '' ?>" value="<?= $dados['email'] ?? '' ?>" placeholder="Digite seu e-mail">
							<div class="invalid-feedback text-center">
								<?= $dados['email_erro'] ?? '' ?>
							</div>
						</div>

						<div class="form-group">
							<label for="senha">Senha: <sup class="text-danger">*</sup></label>
							<input type="password" name="senha" id="senha" class="form-control <?= isset($dados['senha_erro']) ? 'is-invalid' : '' ?>" value="<?= $dados['senha'] ?? '' ?>" placeholder="Digite sua senha">
							<div class="invalid-feedback text-center">
								<?= $dados['senha_erro'] ?? '' ?>
							</div>
						</div>

						<input type="submit" value="Entrar" class="btn btn-block btn-primary" style="background: blue;">
						<div class="col-md-12 mt-2 text-center">
							<a href="<?= URL ?>/usuarios/cadastrar"><p>Não tem uma conta? Cadastre-se</p></a>
						</div>
					</form>
				</div>
				</div>
				
				</div>
				
			</div>
    	</div>
  	</div>
</div>

<?php Paginas::alterarHeader('Entrar no sistema',URL.'/public/img/icons/user-man.png');?>

<style>
	label {
  		font-weight: bolder;
	}
</style>

<div class="content p-5">
	<div class="container p-3">
    	<div class="row">
			<div class="col-md-8 contents">
				<div class="row justify-content-center">
					<div class="col-md-8 justify-content-center p-4">
					<div class="mb-4">
						<h3 class="text-center" style="font-weight: bolder;">Entrar no sistema</h3>
						<?=Sessao::mensagem('login_invalido') ?? ''?>
						<?=Sessao::mensagem('cadastro_realizado') ?? ''?>
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
							<a class="text-primary" href="<?= URL ?>/usuarios/cadastrar"><p>Não tem uma conta? Cadastre-se</p></a>
						</div>
					</form>
				</div>
				</div>
				
				</div>
				<div class="col-md-4 m-auto">
					<img src="<?= URL ?>/public/img/background-ico.svg" alt="" class="img-fluid">
				</div>
			</div>
    	</div>
  	</div>
</div>
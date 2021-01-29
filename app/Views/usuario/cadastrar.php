<div class="col-xl-5 xl-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header bg-dark text-light">
            <h2 class="text-center">Cadastrar</h2>
        </div>
        <div class="card-body">
            <form action="<?= URL ?>/usuario/login" name="login" method="POST">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" class="form-control" value="" placeholder="Nome completo">
                    <div class="invalid-feedback text-center">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="text" name="email" id="email" class="form-control" value="" placeholder="Endereço de e-mail">
                    <div class="invalid-feedback text-center">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="senha" id="senha" class="form-control" value="" placeholder="Crie uma senha">
                    <div class="invalid-feedback text-center">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm_senha">Confirmar senha: <sup class="text-danger">*</sup></label>
                    <input type="password" name="confirm_senha" id="confirm_senha" class="form-control" value="" placeholder="Confirme sua senha">
                    <div class="invalid-feedback text-center">
                        
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <input type="submit" value="Entrar" class="btn btn-success btn-block">
                    </div>
                    <div class="col-md-8 pt-2">
                        <a class="text-center" href="<?= URL ?>/usuario/cadastrar"><p>Não tem uma conta? Cadastre-se</p></a>
                    </div>
                </div>
            </form>
        </div>
    </div>   
</div>
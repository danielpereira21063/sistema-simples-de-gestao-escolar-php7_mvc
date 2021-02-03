<?php if(Sessao::logado()){ Url::redirecionar( 'usuarios' ); }?>

<style>
    .page-header {
        background: rgb(0, 20, 30);
        opacity: .98;
    }
</style>

    <!-- <h4 class="card-titler bg-white text-dark" style="font-weight: bolder;"><a href="<?=URL?>/usuarios/cadastrar" class="text-primary">Crie uma conta</a> ou <a href="<?=URL?>/usuarios/login" class="text-primary">faça login</a>
        para mais interatividades com o sistema
    </h4>
    <div class="row">
        <div class="col-xl-4">

            <div id="" class="view mt-5">
                <img class="card-img-top" src="<?=URL?>/public/img/background-ico.svg" alt="">
            </div>
        </div> -->
        <div class="page-header py-5 text-center position-relative">
	    <!-- <div class="bg-shapes-right"></div>
	    <div class="bg-shapes-left"></div> -->
	    <div class="container">
		    <h3 class="page-heading single-col-max mx-auto text-white" style="font-weight: bolder;";><a href="<?=URL?>/usuarios/cadastrar" class="text-primary">Crie uma conta</a> ou <a href="<?=URL?>/usuarios/login" class="text-success">faça login</a>
        para mais interatividades com o sistema</h3>
            <div class="page-intro single-col-max mx-auto text-muted"></div>
            <div class="row">
                <div class="col-md-6 m-auto">
                <p><a href="<?=URL?>/usuarios/cadastrar" class="btn btn-primary p-2 my-2">Criar uma nova conta</a></p>
            <p><a href="<?=URL?>/usuarios/login" class="btn btn-success p-2 my-2">Acessar sua conta</a></p>
            <p><a href="<?=URL?>/pagina/sobre" class="btn btn-danger p-2 my-2">Sobre o site</a></p>
                </div>
            </div>
	    </div>
    </div>
        <div class="col-md-8 mt-5">
            <p><a href="<?=URL?>/usuarios/cadastrar" class="btn btn-primary p-2 my-2">Criar uma nova conta</a></p>
            <p><a href="<?=URL?>/usuarios/login" class="btn btn-success p-2 my-2">Acessar sua conta</a></p>
            <p><a href="<?=URL?>/pagina/sobre" class="btn btn-danger p-2 my-2">Sobre o site</a></p>
        </div>
    </div>

<script>
   document.title = 'Página inicial';
   document.head.children[2].href = "<?=URL?>/public/img/icons/home-ico.png";
</script>
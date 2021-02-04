<?php Paginas::alterarHeader('Página inicial', URL.'/public/img/icons/home-ico.png'); ?>
<?php if(!Sessao::logado()): ?> 
    <!-- Se o usuario não estiver logado // Primeiro if -->
    <style>
        .page-header {
            background: rgb(0, 20, 30);
            opacity: .98;
        }
    </style>
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

<?php else: // else do primeiro if ?>

<style>
    .jumbotron {
        background-color: white;
    }
    .search-input {
        border-radius: 40px;
    }
    .page-header {
        background: #26292d;
    }
    .card-title-text {
        color: green;
        font-weight: bold;
    }
</style>
<div class="page-header py-3 text-center position-relative">
	    <div class="container">
            <h3 class="page-heading single-col-max mx-auto text-white" style="font-weight: bolder;";>
                Olá, <?=Sessao::nomeUsuario(); ?>
            </h3>
            <div class="page-intro single-col-max mx-auto text-muted">O que deseja fazer hoje?</div>
            <div class="row">
                <div class="col-md-4 m-auto">
                    <div class="search-box pt-3 d-block mx-auto">
                         <form class="search-form w-100">
                            <input type="text" placeholder="Pesquisar por..." name="search" class="form-control search-input">
                            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"><img src="<?=URL?>/public/img/icons/search.png" alt="" srcset=""></i></button>
                        </form>
                     </div>
                </div>
            </div>
	    </div>
    </div>

<main role='main'>
<div class="page-content">
	    <div class="container">
		    <div class="docs-overview py-4">
			    <div class="row justify-content-center">
				    <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-4 py-1">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-map-signs"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Cadastrar um novo aluno</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
							    </div>
							    <a class="card-link-mask" href="docs-page.html#section-1"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-4 py-1">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-arrow-down"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Listar todos os alunos</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
							    </div>
							    <a class="card-link-mask" href="docs-page.html#section-2"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-4 py-1">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-box fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Visualizar notas das turmas</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-3"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
				    <div class="col-12 col-lg-4 col-md-4 col-xl-4 col-sm-4 py-1">
					    <div class="card shadow-sm">
						    <div class="card-body">
							    <h5 class="card-title mb-3">
								    <span class="theme-icon-holder card-icon-holder mr-2">
								        <i class="fas fa-cogs fa-fw"></i>
							        </span><!--//card-icon-holder-->
							        <span class="card-title-text">Listar todos os usuarios</span>
							    </h5>
							    <div class="card-text">
								    Section overview goes here. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.						    
								</div>
							    <a class="card-link-mask" href="docs-page.html#section-4"></a>
						    </div><!--//card-body-->
					    </div><!--//card-->
				    </div><!--//col-->
			    </div><!--//row-->
		    </div><!--//container-->
		</div><!--//container-->
    </div><!--//page-content-->

</main>
<?php endif; // fim do primeiro if?>

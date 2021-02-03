<?php if ( Sessao::logado() ): ?>

<style>
    .jumbotron {
        background-color: white;
    }
    .search-input {
        border-radius: 40px;
    }
    .page-header {
        background: rgb(0, 20, 30);
        opacity: .98;
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

    <section class='text-center'>
        <div class='container-fluid'>
            <div class='col col-md-6'>
                <p>
                    <a href='#' class='btn btn-primary my-2'>Cadastrar um novo aluno</a>
                    <a href='#' class='btn btn-secondary my-2'>Listar todos os alunos</a><br>
                    <a href='#' class='btn btn-primary my-2'>Visualizar notas das turmas</a>
                    <a href='usuarios/listar' class='btn btn-secondary my-2'>Listar todos os usuarios</a>
                </p>
                        

            </div>
        </div>

    </section>
    <!-- <div class = 'album py-5 bg-light'>
<div class = 'container'>

<div class = 'row'>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'></p>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>

<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>

<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
<div class = 'col-md-4'>
<div class = 'card mb-4 shadow-sm'>
<img class = 'card-img-top' data-src = 'holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail' alt = 'Card image cap'>
<div class = 'card-body'>
<p class = 'card-text'>Este é um card maior e que suporta texto abaixo, como uma introdução mais natural ao conteúdo adicional. No entanto, esse conteúdo é um pouco maior.</p>
<div class = 'd-flex justify-content-between align-items-center'>
<div class = 'btn-group'>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Ver</button>
<button type = 'button' class = 'btn btn-sm btn-outline-secondary'>Editar</button>
</div>
<small class = 'text-muted'>9 mins</small>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->

</main>
<?php else:
Url::redirecionar( 'usuarios/login' );
endif;

?>
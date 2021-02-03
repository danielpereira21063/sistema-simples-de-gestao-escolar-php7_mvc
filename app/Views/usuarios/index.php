<?php if ( Sessao::logado() ): ?>

<style>
    .jumbotron {
        background-color: white;
    }
</style>

<main role='main'>

    <section class='text-center'>
        <div class='container-fluid'>
            <div class='row mb-4'>
                <div class='col col-md-6'>

                    <h2 class='jumbotron-heading'>Olá, <?=Sessao::nomeUsuario(); ?>
                    </h2>
                    <p class='lead text-muted'>O que deseja fazer hoje?</p>
                    <p>
                        <a href='#' class='btn btn-primary my-2'>Cadastrar um novo aluno</a>
                        <a href='#' class='btn btn-secondary my-2'>Listar todos os alunos</a><br>
                        <a href='#' class='btn btn-primary my-2'>Visualizar notas das turmas</a>
                        <a href='usuarios/listar' class='btn btn-secondary my-2'>Listar todos os usuarios</a>
                    </p>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-inline">
                        
                        <form action='<?=URL?>/buscar' method='POST'>
                            <div>
    
                                <input class='form-control mb-1' type='search' name='pesquisar' id='pesquisa' placeholder='Faça uma pesquisa'>
                                <button class='btn btn-md btn-outline-light' type='submit'><img src="<?=URL?>/public/img/icons/search.png" alt=""></button>
    
                            </form>
                        </div>
                    </div>
                </div>
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
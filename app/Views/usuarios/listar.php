<?php
// $db = new Database();
// $db->query("SELECT nome, email, data_criacao FROM usuarios");
// var_dump($db->resultados());

// var_dump($dados);
?>

<div class="container-fluid mt-5">
    <h3 class="text-center mb-3">Usuarios</h3>
    <div class="col-md-12">
        <div class="table-responsive">
    
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr class="bg-dark text-white">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Endereço de E-mail</th>
                        <th>Data de cadastro</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dados[0] as $registro): ?>
                    <tr>
                        <td><?=$registro->id?></td>
                        <td><?=$registro->nome?></td>
                        <td><?=$registro->email?></td>
                        <td><?=$registro->data_criacao?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
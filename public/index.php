<?php
include './../app/config.php';
include '../app/Libraries/Controller.php';
include '../app/Libraries/Rota.php';
include '../app/Libraries/Database.php';

$db = new Database();

$nome = 'Daniel Pereira Sanches';
$email = 'danielsanches6301@gmail.com';
$senha = '123456';

$db->query("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
$db->bind(':nome', $nome);
$db->bind(':email', $email);
$db->bind(':senha', $senha);

$db->executar();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL ?>/public/libs/bootstrap/css/bootstrap.css">
    <title><?= APP_NAME ?> </title>
</head>
<body>
<?php
require_once APP.'/Views/header.php';

$rota = new Rota();

require_once APP.'/Views/footer.php';
?>

    <script src="<?= URL ?>/public/libs/jquery/jquery.js"></script>
    <script src="<?= URL ?>/public/libs/bootstrap/js/bootstrap.js"></script>
    <!-- <script src="<?= URL ?>/public/libs/bootstrap/js/popper.js"></script> -->
</body>
</html>
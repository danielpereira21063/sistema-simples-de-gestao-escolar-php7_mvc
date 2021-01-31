<?php
include './../app/config.php';
require_once './../app/autoload.php';

?>

<!DOCTYPE html>
<html lang = 'pt-br'>
<head>
<meta charset = 'UTF-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link rel = 'stylesheet' href = '<?=URL?>/public/lib/bootstrap/css/bootstrap.css'>
<link rel = 'stylesheet' href = '<?=URL?>/public/css/estilo.css'>
<title></title>
</head>
<body>
<?php
include '../app/Views/header.php';
$rotas = new Rota();
include '../app/Views/footer.php';
?>

<script src = '<?=URL?>/public/lib/jquery/jquery-3.5.1.js'></script>
<script src = '<?=URL?>/public/lib/js/popper.js'></script>
<script src = '<?=URL?>/public/lib/bootstrap/js/bootstrap.js'></script>
<script src = '<?=URL?>/public/js/jquery.funcoes.js'></script>
</body>
</html>
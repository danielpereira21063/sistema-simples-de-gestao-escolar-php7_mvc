<?php
include './../app/config.php';
include './../app/autoload.php';

// $db = new Database();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="<?= URL ?>/public/vendor/jquery/jquery.js"></script>
    <script src="<?= URL ?>/public/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= URL ?>/public/vendor/bootstrap/js/bootstrap-bundle.js"></script>
    <script src="<?= URL ?>/public/vendor/aos/aos.js"></script>
    <script src="<?= URL ?>/public/vendor/venobox/venobox.js"></script>
    <script src="<?= URL ?>/public/vendor/jquery/jquery.js"></script>
	<script src="<?= URL ?>/public/js/main.js"></script>

    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/vendor/animate/animate.css">
    <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/vendor/select2/select2.min.css">
    <!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= URL ?>/public/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="< URL ?>/public/css/util.css">
	<link rel="stylesheet" type="text/css" href="< URL ?>/public/css/main.css"> -->

    <link rel="stylesheet" href="<?= URL ?>/public/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL ?>/public/vendor/aos/aos.css">
    <link rel="stylesheet" href="<?= URL ?>/public/vendor/boxicons/css/animations.css">
    <link rel="stylesheet" href="<?= URL ?>/public/vendor/boxicons/css/boxicons.css">
    <link rel="stylesheet" href="<?= URL ?>/public/vendor/remixicon/remixicon.css">
    <link rel="stylesheet" href="<?= URL ?>/public/vendor/venobox/venobox.css">
    <title> <?= APP_NAME ?> </title>
</head>
<body>
    <?php
    require_once APP.'/Views/header.php';

    $rota = new Rota();

    require_once APP.'/Views/footer.php';
    ?>
</body>
</html>
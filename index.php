<?php

include_once('./login/verifica_login.php');
include_once('./config.php');

$usuario = $_SESSION['usuario'];
$cargo = $_SESSION['nivel'];

include_once('define_cargo.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>ADS System</title>
    <link rel="shortcut icon" href="./image/alienLogo.ico" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./js/pace.main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/4a8d35f4ff.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="sidebar close">
    <div class="logo-details">
        <i class="fas fa-rocket"></i>
        <span class="logo_name">800K</span>
    </div>
    <ul class="nav-links">
        <li>
            <div class="iocn-link">
                <a href="?p=adv">
                    <i class='bx bx-collection' ></i>
                    <span class="link_name">ADV's</span>
                </a>
                <i class='bx bxs-chevron-down arrow' ></i>
            </div>
            <ul class="sub-menu">
                <li><a class="link_name" href="?p=adv">ADV's</a></li>
                <li><a href="?p=duplicar">Duplicar</a></li>
                <li><a href="?p=novo_dominio">Novo Dominio</a></li>
                <li><a href="?p=substituir_adv">Substituir ADV</a></li>
                <li><a href="?p=trocar_pre">Trocar Pré</a></li>
                <li><a href="?p=alterar_subdomain">Alterar SubDomain</a></li>
            </ul>
        </li>
        <li>
            <a href="?p=historico">
                <i class='bx bx-history'></i>
                <span class="link_name">Histórico</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?p=historico">Histórico</a></li>
            </ul>
        </li>
        <li>
            <a href="?p=config">
                <i class='bx bx-cog' ></i>
                <span class="link_name">Configuração</span>
            </a>
            <ul class="sub-menu blank">
                <li><a class="link_name" href="?p=config">Configuração</a></li>
            </ul>
        </li>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="./image/profile.png" alt="">
                </div>
                <div class="name-job">
                    <div class="profile_name"><?=$usuario ?></div>
                    <div class="job"><?=$cargo ?></div>
                </div>
                <a href="logout.php"><i class='bx bx-log-out' ></i></a>
            </div>
        </li>
    </ul>
</div>
<section style="height: 100%!important;" class="home-section">
    <div class="home-content">
        <i class='bx bx-menu' ></i>
    </div>
    <?php

    $value = @$_GET['p'];

    if($value == null){
        include ("./pages/advs/adv.html");
    }

    else if($value == 'adv' || $value == 'alterar_subdomain' || $value == 'duplicar' || $value == 'novo_dominio' || $value == 'substituir_adv' || $value == 'trocar_pre' ){
        include ("./pages/advs/$value.html");
    }

    else if($value == 'config'){
        include ("./pages/config/$value.html");
    }

    else if($value == 'historico'){
        include ("./pages/historico/$value.html");
    }

    ?>
</section>





<script src="script.js"></script>
<script src="./js/pace.min.js"></script>

</body>
</html>

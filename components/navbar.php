<?php session_start();
setlocale(LC_ALL, "pt-BR");
?>
<nav class="navbar navbar-expand-lg bg-warning sticky-top">
    <div class="container">
        <a class="navbar-brand d-flex justify-content-center align-items-center" href="#">
            <img src="./assets/logo.png" alt="Logo" width="auto" height="40" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a id="home" class="nav-link" aria-current="page" href="./index.php"><i class="fa-solid fa-house-user"></i> Início</a>
                </li>
                <li class="nav-item">
                    <a id="app" class="nav-link" href="./app.php"><i class="fa-solid fa-dna"></i> Descobrir</a>
                </li>
                <li class="nav-item">
                    <a id="sobre" class="nav-link" href="./sobre.php"><i class="fa-solid fa-circle-question"></i> Sobre</a>
                </li>
                <?php if(!isset($_SESSION['usuario'])): ?>
                <li class="nav-item">
                    <a id="sobre" class="nav-link" href="./login.php"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
                </li>
                <?php endif ?>
                <?php
                if (isset($_SESSION['usuario'])) :
                ?>  
                <li class="nav-item">
                        <a id="sobre" class="nav-link" href="./criarquirk.php"><i class="fa-solid fa-bolt"></i> Criar Quirk</a>
                    </li>
                    <li class="nav-item">
                        <a id="sobre" class="nav-link" href="./logoff.php"><i class="fa-solid fa-circle-xmark"></i> Deslogar</a>
                    </li>
                    
                <?php endif; ?>
               

            </ul>
        </div>
    </div>
</nav>
<?php
$title = "myQuirk - Início";
include './components/header.php' ?>
<!-- site -->
<?php include './components/navbar.php' ?>
<section>
    <div class="container hero mt-5">
        <div class="row">
            <div class="col" id="welcome">
                <h1>Bem-Vindo futuro Herói ou Heroína!</h1>
                <hr>
                <h5 class="mt-2">Você gostaria de descobrir a sua <b>Individualidade</b>?<br>
                Descubra qual seria seu poder se você fizesse parte do universo de Boku no Hero Academia
                </h5>
                <p style="color: red;">Este site é feito por fã, todos os direitos são reservados aos autores e desenvolvedores do anime</p>
                <a href="app.php"><button class="btn btn-danger mt-4"><i class="fa-solid fa-dna"></i> Descobrir minha Individualidade</button></a>
            </div>
            <div class="col">
                <img src="./assets/midorya.png" class="img-fluid" alt="" id="midorya">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- footer -->
<?php include './components/footer.php' ?>

<script>
    $("#home").addClass("active")
</script>

<style>
    body {
        overflow-x: hidden;
        height: 100vh;
    }
</style>
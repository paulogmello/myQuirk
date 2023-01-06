<?php
$title = "myQuirk - Sobre";
include './components/header.php' ?>
<!-- site -->
<?php include './components/navbar.php' ?>

<div class="container mt-3">
    <div class="row">
        <div class="col">
            <h2><i class="fa-solid fa-triangle-exclamation"></i> Sobre o Projeto</h2>
            Este é um projeto de estudo de uso de algumas tecnologias, sendo elas PHP, SQL e Javascript. O código é aberto através do github. <br>
            Algumas imagens foram feitas especialmente para o site, porém todos os assets na criação dela foram retirados da internet.
            <p></p>
            <h4>Lógica do Sistema</h4>
            Primeiramente, o programa irá girar um número aleatório entre 1 e 100.
            Com isso, será decidido qual dentre os 4 RANKS (Comum, Incomum, Raro e Especial) você terá. Em seguida, será puxado no banco de dados as possíveis individualidades conforme o RANK. Após isso, será escolhido uma individualidade aleatória dentro daquele contexto.
        </div>
        
    </div>

</div>


<?php include './components/footer.php' ?>

<script>
    $("#sobre").addClass("active")
</script>
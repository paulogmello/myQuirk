<?php
$title = "myQuirk - Descobrir";
include './components/header.php';

$imgtest = "https://images.unsplash.com/photo-1548504769-900b70ed122e?ixlib=rb-1.2.1&w=1080&fit=max&q=80&fm=jpg&crop=entropy&cs=tinysrgb";
require_once './config/conexao.php';

// Descobrir rank
$randomiz = rand(1, 100);
if ($randomiz >= 95) {
    $blood = 1;
    // echo 'Especial';
} else if ($randomiz > 80 && $randomiz < 95) {
    $blood = 2;
    // echo 'Raro';
} else if ($randomiz > 60 && $randomiz <= 80) {
    $blood = 3;
    // echo 'Incomum';
} else if ($randomiz <= 60) {
    $blood = 4;
    // echo 'Comum';
}

if ($blood === 1) {
    $bloodW = 100;
    $bloodC = 'bg-warning';
    $bloodT = '<span class="text-warning"  id="rank">Especial</span>';
} else if ($blood === 2) {
    $bloodW = 75;
    $bloodC = 'bg-success';
    $bloodT = '<span class="text-success"  id="rank">Raro</span>';
} else if ($blood === 3) {
    $bloodW = 50;
    $bloodC = 'bg-primary';
    $bloodT = '<span class="text-primary"  id="rank">Incomum</span>';
} else if ($blood === 4) {
    $bloodW = 25;
    $bloodC = 'bg-secondary';
    $bloodT = '<span class="text-secondary"  id="rank">Comum</span>';
}

$sql = "SELECT * FROM quirk WHERE quirk_rank LIKE '$blood' ORDER BY RAND()";
$conn = novaConexao();
$result = $conn->query($sql);
$regs = [];
if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        $regs[] = $rows;
    }
} else {
    die("Ocorreu um erro na aplicação, por favor reinicie " . $blood);
}
foreach ($regs as $reg) :
endforeach;

$conn->close();
?>
<!-- site -->
<?php include './components/navbar.php' ?>

<div class="container">
    <div class="row mt-5" id="rowm">
        <div class="col text-center" id="desktop">
            <h2 class="text-center" id="text-title"><i class="fa-solid fa-dna"></i> Esta é a sua individualidade: </h2>
            <div class="row d-flex align-items-center justify-content-center" id="rowind">
                <a href="./app.php" class="btn btn-danger mb-3" id="descobrirbtn"><i class="fa-solid fa-dna"></i> Descobrir minha Individualidade</a>
                <div class="col">
                    <img src="<?= $reg['quirk_img'] ?>" alt="" style="width: 20rem;">
                </div>
                <div class="col text-start" id="nomeind">
                    <h1 style="color: orange;"><?= $reg['quirk_name'] ?></h1>
                    <hr>
                    <p><?= $reg['quirk_desc'] ?></p>
                    Potência: <b class="text-danger"><?= $randomiz ?> </b>
                    <div class="progress mb-1">
                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-label="Example with label" style="width: <?= $randomiz ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    Rank: <b><?= $bloodT ?> </b>
                    <div class="progress mb-1">
                        <div class="progress-bar progress-bar-striped progress-bar-animated <?= $bloodC ?>" role="progressbar" aria-label="Example with label" style="width: <?= $bloodW ?>%;" aria-valuenow="25" aria-valuemin="1" aria-valuemax="4"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-5" id="comofunciona">
            <h2 class="text-center"><i class="fa-solid fa-gear"></i> Como funciona?</h2>
            <p>Primeiramente, o programa irá girar um a <a href="#" data-bs-toggle="tooltip" data-bs-title="Um dado com 100 lados">d100</a> para decidir qual rank de individualidade você terá.<br> </p>
            <ul class="list-group mb-3 text-center">
                <li class="list-group-item" id="d1"><b>1 a 5</b> - Individualidades <b class="text-warning">Especiais</b></li>
                <li class="list-group-item" id="d2"><b>6 a 20</b> - Individualidades <b class="text-success">Raras</b></li>
                <li class="list-group-item" id="d3"><b>21 a 40</b> - Individualidades <b class="text-primary">Incomuns</b></li>
                <li class="list-group-item" id="d4"><b>41 a 100</b> - Individualidades <b class="text-secondary">Comuns</b></li>
            </ul>
            <p>Após isso, o resultado irá decidir em qual tipo de individualidade você encaixa, e posteriormente irá mostrar qual individualidade você possui.</p>

        </div>
    </div>
</div>

<?php include './components/footer.php' ?>

<script>
    $("#app").addClass("active");
    let verAtivo = document.getElementById('rank').textContent;
    if (verAtivo === "Comum") {
        $("#d4").addClass("active");
    } else if (verAtivo === "Incomum") {
        $("#d3").addClass("active");
    } else if (verAtivo === "Raro") {
        $("#d2").addClass("active");
    } else if (verAtivo === "Especial") {
        $("#d1").addClass("active");
    }

    // mobile
    $("#descobrirbtn").hide();

    if ($(window).width() < 600) {
        $("#descobrirbtn").show();
        $("#rowm").attr('class', 'mt-4');
        $("#text-title").hide();
        $("#rowind").attr('class', 'text-center mb-3');
        $("#nomeind").attr('class', 'text-center mt-3');
        $("#desktop").attr('class', 'row text-center mx-2 mb-5')
        $("#comofunciona").attr('class', 'row text-center mx-2 mb-5')

    }
</script>
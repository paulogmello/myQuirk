<?php
$title = "Login";
include './components/header.php';
include './components/navbar.php';
include './config/conexao.php';

// banco de dados
$conn = novaConexao();
error_reporting(0);
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
$registros = [];
$msg = [];
if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        $registros[] = $rows;
    }
} else {
    $msg['erroNaConexao'] = "Falha na conexão ou não existem cadastros";
}

foreach ($registros as $reg) : endforeach;
$user = $_POST['login'];
$pass = $_POST['senha'];
if (count($_POST) > 0) {
    if ($user === $reg['user'] && $pass === $reg['pass']) {
        $_SESSION['usuario'] = $user;
        $msg['senhaCorreta'] = "Senha Correta!";
        header('Location: criarquirk.php');
    } else {
        $msg['senhaIncorreta'] = "Senha Incorreta";
    }
}
?>
<div class="container h-100 d-flex justify-content-center align-items-center">
    <div class="card mb-5">
        <div class="card-header bg-warning text-center h3 p-4"><b>Fazer Login</b></div>
        <div class="card-body">
            <form method="POST" autocomplete="off">
                <div class="mb-3">
                    <?php foreach ($msg as $msgs) : ?>
                        <div class="alert alert-primary" role="alert">
                            <?= $msgs ?>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome de Usuário</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="login" value="<?= $user ?>" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        É necessário um nome de usuário
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" value="<?= $pass ?>" id="validationCustom03" required>
                    <div class="invalid-feedback">
                        É necessário utilizar uma senha
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- <div class="col text-light m-5">

    </div> -->
</div>


<?php
include './components/footer.php';
?>

<style>
    body {
        overflow: hidden;
        height: 100vh;
        width: 100vw;
        background-color: #610a97;
    }
</style>
<?php
$title = "Criar uma Quirk";
include './components/header.php';
include './config/conexao.php';
include './components/navbar.php';
error_reporting(1);
if (!isset($_SESSION['usuario'])) {
    header("Location: ./index.php");
}
// Excluir do BD
if($_GET['excluir']){
    $conn = novaConexao();
    $sql = "DELETE FROM quirk WHERE quirk_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $_GET['excluir']);
    $stmt->execute();
}

// Cadastrar no banco de dados
if (count($_POST) > 0) {
    $sql = "INSERT INTO quirk (quirk_name, quirk_desc, quirk_rank, quirk_img) VALUES (?, ?, ?, ?)";
    $conn = novaConexao();
    $stmt = $conn->prepare($sql);
    if(trim($_FILES['quirk_img']['name'] === '')){
        $img = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTjQFnCgCjWHbgne4eqoITZGYQC03jSz3STeCO-sC7rkRVlaEGyjC-7gxmg4Uq5JW0zBQ&usqp=CAU";
    } else if ($_FILES && $_FILES['quirk_img']) {
        $pastaUpload = './assets/quirkimgs/';
        $nomeArquivo = $_FILES['quirk_img']['name'];
        $tmp = $_FILES['quirk_img']['tmp_name'];
        $arquivo = $pastaUpload . $nomeArquivo;
        move_uploaded_file($tmp, $arquivo);
        $img = $arquivo;  
    }
    $params = [
        $_POST['quirk_name'],
        $_POST['quirk_desc'],
        $_POST['quirk_rank'],
        $img,
    ];
    $stmt->bind_param("ssss", ...$params);
    if ($stmt->execute()) {
        $msgs['CadastroSucesso'] = "Cadastrado com sucesso";
    }
}

// Banco de dados
$sql = "SELECT * FROM quirk ORDER BY quirk_id DESC";
$conn = novaConexao();
$result = $conn->query($sql);
$msgs = [];

$registros = [];
if ($result->num_rows > 0) {
    while ($rows = $result->fetch_assoc()) {
        $registros[] = $rows;
    }
} else {
    echo "Erro na conexão ou não há dados";
}

?>
<div class="container mt-5">
    <div class="row ">
        <div class="col-4 position-fixed">
            <h2>Criar Quirk</h2>
            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Super Força" name="quirk_name">
                        <label for="floatingInput">Nome da individualidade</label>
                    </div>
                    <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="quirk_rank">
                            <option selected>Selecione uma Rank</option>
                            <option value="1">Especial</option>
                            <option value="2">Raro</option>
                            <option value="3">Incomum</option>
                            <option value="4">Comum</option>
                        </select>
                        <label for="floatingSelect">Qual é o tipo desta individualidade?</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="quirk_desc"></textarea>
                        <label for="floatingTextarea">Descrição</label>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Escolha uma imagem</label>
                        <input class="form-control" type="file" id="formFile" name="quirk_img">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Enviar</button>
                        <button class="btn btn-danger" type="reset">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col offset-5">
            <h2>Quirks Cadastradas</h2>
            <table class="table text-center">
                <div class="thead">
                    <tr>
                        <th>Imagem</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Rank</th>
                        <th>Ação</th>
                    </tr>
                </div>
                <div class="tbody">
                    <?php foreach ($registros as $regs) : ?>
                        <tr>
                            <td>
                                <img src="<?= $regs['quirk_img'] ?>" alt="" class="img-fluid quirk">
                            </td>
                            <td class="text-start">
                                <?= $regs['quirk_name'] ?>
                            </td>
                            <td class="text-start">
                                <?= $regs['quirk_desc'] ?>
                            </td>
                            <td>
                                <?php
                                $rank = $regs['quirk_rank'];
                                switch ($rank):
                                    case 1;
                                        echo "Especial";
                                        break;
                                    case 2;
                                        echo "Raro";
                                        break;
                                    case 3;
                                        echo "Incomum";
                                        break;
                                    case 4;
                                        echo "Comum";
                                        break;
                                endswitch;
                                ?>
                            </td>
                            <td>
                                <a href="?excluir=<?= $regs['quirk_id'] ?>">
                                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></a>
                                
                            </td>
                        </tr>
                    <?php endforeach ?>
                </div>
            </table>
        </div>
    </div>
</div>
<?php
include './components/footer.php';
?>

<style>
    body {
        overflow-X: hidden;
    }
</style>
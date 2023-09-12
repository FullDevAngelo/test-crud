<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        include "conexao.php";

        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $cor = $_POST['cor'];
        $material = $_POST['material'];
        $tamanho = $_POST['tamanho'];
        $formato = $_POST['formato'];
        $peso = $_POST['peso'];
        $qnt_estoque = $_POST['qnt_estoque'];

        $sql = "UPDATE produtos SET nome = '$nome', valor = '$valor', cor='$cor', material = '$material', tamanho = '$tamanho', formato = '$formato', peso = '$peso', qnt_estoque = '$qnt_estoque' WHERE codigo = '$codigo'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header('Location: index.html');
            exit();
        }else{
            echo "Erro ao atualizar dados do produto";
            die(mysqli_error($conn));
        }
    }elseif(isset($_GET['codigo'])){
        include "conexao.php";

        $codigo = $_GET['codigo'];
        $sql = "SELECT * FROM produtos WHERE codigo = $codigo";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mercadoria</title>
</head>
<body>
    <div>
        <?php if($row): ?>
            <h2>Atualizar dados das mercadorias</h2>
            <form action="" method="POST">
            <div>
                <label for="codigo">Código</label>
                <input type="text" disabled="" type="hidden" name="codigo" value="<?php echo $row['codigo']?>">
            </div>
            <div>
                <label for="nome" >nome</label>
                <input maxlength="40" type="text" value="<?php echo $row['nome']?>" name="nome">
            </div>
            <div>
                <label for="valor">valor</label>
                <input type="text" maxlength="30" value="<?php echo $row['valor']?>" name="valor">
            </div>
            <div>
                <label for="cor">cor</label>
                <input type="text" maxlength="30" value="<?php echo $row['cor']?>" name="cor">
            </div>
            <div>
                <label for="material">material</label>
                <input type="text" maxlength="30" value="<?php echo $row['material']?>" name="material">
            </div>
            <div>
                <label for="tamanho">tamanho</label>
                <input type="text" maxlength="30" value="<?php echo $row['tamanho']?>" name="tamanho">
            </div>
            <div>
                <label for="formato">formato</label>
                <input type="text" maxlength="30" value="<?php echo $row['formato']?>" name="formato">
            </div>
            <div>
                <label for="peso">peso</label>
                <input type="text" maxlength="30" value="<?php echo $row['peso']?>" name="peso">
            </div>
            <div>
                <label for="qnt_estoque">Quantidade no estoque</label>
                <input type="text" maxlength="30" value="<?php echo $row['qnt_estoque']?>" name="qnt_estoque">
            </div>
           
                <input type="submit" value="Atualizar Mercadoria">
                <a href="index.php">Voltar</a>
        </form>
        <?php else: ?>
            <p>Erro ao atualizar a mercadoria</p>
        <?php endif; ?>
    </div>
</body>
</html>
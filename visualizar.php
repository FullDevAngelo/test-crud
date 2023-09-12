<?php
    include "conexao.php";
    if(isset($_GET['codigo'])) {
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
    <title>Detalhes da mercadoria</title>
</head>

<body>
    <div class="container">
        <?php if($row): ?>
            <h2>Mercadoria</h2>
            <p><strong>Código:</strong> <?php echo $row['codigo'] ?></p>
            <p><strong>Nome:</strong> <?php echo $row['nome'] ?></p>
            <p><strong>Valor:</strong> <?php echo $row['valor'] ?></p>
            <p><strong>Cor:</strong> <?php echo $row['cor'] ?></p>
            <p><strong>Material:</strong> <?php echo $row['material'] ?></p>
            <p><strong>Tamanho:</strong> <?php echo $row['tamanho'] ?></p>
            <p><strong>Formato:</strong> <?php echo $row['formato'] ?></p>
            <p><strong>Peso:</strong> <?php echo $row['peso'] ?></p>
            <p><strong>Quantidade no Estoque:</strong> <?php echo $row['qnt_estoque'] ?></p>
            <?php endif; ?>

            <a class="btn btn-secondary" href="index.php">Voltar</a>

     
    </div>
    
</body>
</html>
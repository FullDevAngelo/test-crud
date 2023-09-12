<?php 
    include "conexao.php";

    $sql = "SELECT * FROM produtos";
    $result = mysqli_query($conn, $sql);

    if(!$result) {
        die("Erro na consulta: " .mysqli_error($conn));
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DWELLO</title>
</head>
<body>
    <div>
    <h2>Controle de Estoque</h2>
    <a href="criar.php"><button>Registrar nova mercadoria</button></a>
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Cor</th>
            <th>Material</th>
            <th>Tamanho</th>
            <th>Formato</th>
            <th>Peso</th>
            <th>Quantidade disponível no estoque</th>
        </tr>

        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <tr>
                <td><?php echo $row['codigo']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['valor']; ?></td>
                <td><?php echo $row['cor']; ?></td>
                <td><?php echo $row['material']; ?></td>
                <td><?php echo $row['tamanho']; ?></td>
                <td><?php echo $row['formato']; ?></td>
                <td><?php echo $row['peso']; ?></td>
                <td><?php echo $row['qnt_estoque']; ?></td>
                <td>
                    <a href="visualizar.php?codigo=<?php echo $row['codigo']; ?>"><button>Detalhes</button></a>
                    <a href="editar.php?codigo=<?php echo $row['codigo']; ?>"><button>Editar</button></a>
                    <a href="deletar.php?codigo=<?php echo $row['codigo']; ?>"><button type="button">Excluir</button></a>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
    </div>
</body>
</html>
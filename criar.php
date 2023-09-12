<?php
    include "conexao.php";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        $cor = $_POST['cor'];
        $material = $_POST['material'];
        $tamanho = $_POST['tamanho'];
        $formato = $_POST['formato'];
        $peso = $_POST['peso'];
        $qnt_estoque = $_POST['qnt_estoque'];

        $sql = "INSERT INTO produtos (nome, valor, cor, material, tamanho, formato, peso, qnt_estoque) VALUES ('$nome', '$valor', '$cor', '$material', '$tamanho', '$formato', '$peso', '$qnt_estoque')";

        $result = mysqli_query($conn, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Mercadoria</title>
    
</head>
<body>


    <div class="container">
        <h2>Adicionar Nova Mercadoria</h2>
        <form method="POST" action="">

            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" maxlength="40" required><br>
            </div>

            <div>
                <label for="valor">Valor:</label>
                <input type="number" name="valor" maxlength="30" required><br>
            </div>

            <div>
                <label for="cor">Cor:</label>
                <input type="text" name="cor" required><br>
            </div>

            <div>
                <label for="material">Material:</label>
                <input type="text" name="material" maxlength="40" required><br>
            </div>

            <div>
                <label for="tamanho">Tamanho:</label>
                <input type="text" name="tamanho" maxlength="40" required><br>
            </div>

            <div>
                <label for="formato">Formato:</label>
                <input type="text" name="formato" maxlength="40" required><br>
            </div>

            <div>
                <label for="peso">Peso:</label>
                <input type="number" name="peso" maxlength="40" required><br>
            </div>

            <div>
                <label for="qnt_estoque">Quantidade no estoque:</label>
                <input type="number" name="qnt_estoque" maxlength="40" required><br>
            </div>

            <input type="submit" value="Adicionar Mercadoria">
            <a href="index.php">Voltar</a>
        </form>
    </div>
</body>
</html>
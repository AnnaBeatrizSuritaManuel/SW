<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
    <style>
                table {
            border-collapse: collapse;
            width: 50%;
            margin: 40px auto;
            font-family: Arial, sans-serif;
        }

        th, td {
            border: 1px solid #999;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
<table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>categoria</th>
        </tr>    
        <?php
        // Array associativo com produtos
        $produtos = [
            ["nome" => "Celular", "preco" => "2500.00","categoria" =>"eletronicios"],
            ["nome" => "Calca moletom", "preco" => "60.00", "categoria" => "Roupas"],
            ["nome" => "Tablet", "preco" => "3500.00", "categoria" => "Eletrônico"],
            ["nome" => "Moletom", "preco" => "70.00", "categoria" => "Roupas"],
            ["nome" => "Bolo", "preco" => "70.00", "categoria" => "Alimentos"],

        ];

        // Exibe os produtos na tabela
        foreach ($produtos as $produto) {
            $categoria = $produto["categoria"];
            echo "<tr class='$categoria'>";
            echo "<td>{$produto['nome']}</td>";
            echo "<td>R$ {$produto['preco']}</td>";
            echo "<td>{$produto['categoria']}</td>";
            echo "</tr>";
        }
?>
</table>
</body>
</html>
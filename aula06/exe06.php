<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>
<body>

<?php
$produtos = [
['nome' => 'Produto A', 'preco' => 10.99],
['nome' => 'Produto B', 'preco' => 15.50],
['nome' => 'Produto C', 'preco' => 7.99]
];

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Preco</th></tr>";
foreach ($produtos as $produto) {
echo "<tr><td>{$produto['nome' ]}</td><td>{$produto['preco' ]}</td></tr>";
}
echo "</table>";
   ?> 
</table>     
</body>
</html>
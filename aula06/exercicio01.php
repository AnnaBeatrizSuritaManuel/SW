<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 01</title>
<style>
        table {
            width: 60%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        .par {
            background-color:rgb(192, 82, 255);
        }
        .impar {
            background-color:rgb(84, 250, 107);
        }
    </style>
</head>
<body>

<table>
        <tr>
            <th>Coluna 01</th>
            <th>Coluna 02</th>
            <th>Coluna 03</th>
        </tr>
        <?php
        for ($i = 1; $i <= 5; $i++) {
            $classe = ($i % 2 == 0) ? 'par' : 'impar';
            echo "<tr class='$classe'>";
            for ($j = 1; $j <= 3; $j++) {
                echo "<td>Linha $i, Coluna $j</td>";
            }
            echo "</tr>";
        }
        ?>
</table>

</body>
</html>
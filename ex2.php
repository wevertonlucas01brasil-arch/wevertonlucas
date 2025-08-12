<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Exemplo de Operadores de Comparação em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            padding: 20px;
        }

        h1,
        h2 {
            color: #333;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            background: white;
            marginbottom: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background: #eee;
        }

        .verdadeiro {
            color: green;
            font-weight: bold;
        }

        .falso {
            color: red;
            font-weight: bold;
        }

        .vars {
            font-family: monospace;
            background: #efefef;
            padding: 10px;
            border-radius: 5px;
            marginbottom: 20px;
        }
    </style>
</head>

<body>
    <h1>Operadores de Comparação em PHP</h1>
    <?php
    $b = 10;
    $c = "10";
    $d = 15;
    function resultado($condicao)
    {
        return $condicao ? "<span class='verdadeiro'>Verdadeiro</span>" : "<span class='falso'>
Falso</span>";
    }
    function tipo_valor($var)
    {
        return gettype($var) . " (" . var_export($var, true) . ")";
    }
    ?>
    <h2>Valores das Variáveis</h2>
    <div class="vars">
        <strong>$b</strong>: <?= tipo_valor($b) ?><br>
        <strong>$c</strong>: <?= tipo_valor($c) ?><br>
        <strong>$d</strong>: <?= tipo_valor($d) ?><br>
    </div>
    <table>
        <tr>
            <th>Expressão</th>
            <th>Resultado</th>
            <th>Explicação</th>
        </tr>
        <tr>
            <td>$b == $c</td>
            <td><?= resultado($b == $c) ?></td>
            <td>Igualdade de valores (10 == "10")</td>
        </tr>
        <tr>
            <td>$b === $c</td>
            <td><?= resultado($b === $c) ?></td>
            <td>Igualdade de valor e tipo</td>
        </tr>
        <tr>
            <td>$b != $c</td>
            <td><?= resultado($b != $c) ?></td>
            <td>Não igual</td>
        </tr>
        <tr>
            <td>$b <> $d</td>
            <td><?= resultado($b <> $d) ?></td>
            <td>Diferente</td>
        </tr>
        <tr>
            <td>$b !== $c</td>
            <td><?= resultado($b !== $c) ?></td>
            <td>Não idêntico (valor ou tipo diferentes)</td>
        </tr>
        <tr>
            <td>$b &lt; $d</td>
            <td><?= resultado($b < $d) ?></td>
            <td>Menor</td>
        </tr>
        <tr>
            <td>$d &gt; $b</td>
            <td><?= resultado($d > $b) ?></td>
            <td>Maior</td>
        </tr>
        <tr>
            <td>$b &lt;= $c</td>
            <td><?= resultado($b <= $c) ?></td>
            <td>Menor ou igual</td>
        </tr>
        <tr>
            <td>$d &gt;= $c</td>
            <td><?= resultado($d >= $c) ?></td>
            <td>Maior ou igual</td>
        </tr>
    </table>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="mincik.css">
    <title>Juraj Minčík</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Juraj Minčík</h1>
    <h2>Disciplína - vodný slalom</h2>
    <h3>Úspechy</h3>
    <table>
        <tr>
            <th>Meno</th>
            <th>Disciplina</th>
            <th>Zlato</th>
            <th>Striebro</th>
            <th>Bronz</th>
            <th>Rok</th>
            <th>Miesto</th>
            <th>Typ</th>
        </tr>
        <?php
            require_once "db_connect.php";
            $sql = "SELECT * FROM bolest WHERE meno = 'Juraj Minčík'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result ->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>$row[Meno]</td>";
                    echo "<td>$row[Disciplina]</td>";
                    echo "<td>$row[Zlato]</td>";
                    echo "<td>$row[Striebro]</td>";
                    echo "<td>$row[Bronz]</td>";
                    echo "<td>$row[Rok]</td>";
                    echo "<td>$row[Miesto]</td>";
                    echo "<td>$row[Typ]</td>";
                }
            }
        ?>
    </table>
    <h3 class="biography">Biografia</h3>
    <p class="biotext">Juraj Minčík (* 27. marec 1977, Spišská Stará Ves) je bývalý slovenský vodnoslalomár, ktorý súťažil v disciplíne C1. Je odchovanec klubu Športový klub kanoistiky Pieniny Červený Kláštor, neskôr bol pretekár klubu KK Slávia UK Bratislava[1] a stal sa tiež členom slovenského reprezentačného družstva.</h3>
    <ul class="awards">
        <li class="one">LOH Sydney 2000 - 3. miesto, vodný slalom</li>
        <li class="two">MS Três Coroas 1997 - 1. miesto, vodný slalom</li>
        <li class="three">MS Augsburg 2003 - 1. miesto, vodný slalom</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
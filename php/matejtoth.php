<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="petravlhova.css">
    <title>Matej Toth</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Matej Tóth</h1>
    <h2>Disciplína - Chôdza</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Matej Toth'";
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
    <p class="biotext">Matej Tóth sa narodil 10. februára 1983 a je slovenským pretekárskym chodcom. Je bývalým olympijským víťazom v chôdzi na 50 km. Na OH 2016 skončil prvý v chôdzi na 50 km, získal prvú slovenskú olympijskú medailu v atletike a bol aj prvým slovenským zlatým medailistom v letnom športe okrem kanoe slalomu.</h3>
    <h3>Ocenenia a vyznamenania</h3>
    <ul class="awards">
        <li class="one">Štvornásobný zlatý medailista z majstrovstiev sveta v orientačnom behu (2009, 2011, 2015, 2019)</li>
        <li class="two">Dvojnásobný strieborný medailista z majstrovstiev sveta v orientačnom behu (2010, 2018)</li>
        <li class="three">Trojnásobný zlatý medailista z Majstrovstiev Európy v orientačnom behu (2010, 2012, 2014)</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
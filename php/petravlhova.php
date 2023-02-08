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
    <title>Petra Vlhová</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Petra Vlhová</h1>
    <h2>Disciplína - Alpské Lyžovanie</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Petra Vlhová'";
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
    <p class="biotext">Petra Vlhová je slovenská alpská lyžiarka, ktorá sa zúčastnila zimných olympijských hier. 
       Narodila sa 27. apríla 1995 v Liptovskom Mikuláši. S lyžovaním začala v troch rokoch a profesionálne súťaží od svojich 17 rokov. 
       V roku 2018 získala striebornú medailu v slalome na zimných olympijských hrách v Pyeongchangu a odvtedy sa stala špičkovou lyžiarkou na svete.</p>
    <h3>Ocenenia a vyznamenania</h3>
    <ul class="awards">
        <li class="one">Slovak Sportswoman of the Year (2015, 2018, 2019, 2020, 2021)</li>
        <li class="two">Slovak Athlete of the Year (2015, 2018, 2019, 2020, 2021)</li>
        <li class="three">Winner of the Giant Slalom Crystal Globe (2021)</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="martikan.css">
    <title>Michal Martikán</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Michal Martikán</h1>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Michal Martikán'";
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
    <p class="biotext">Michal Martikán je prvý olympijský víťaz v novodobej histórii Slovenska, historicky najmladší víťaz Majstrovstiev sveta v kanoistike na divokej vode. Je olympijským víťazom z Atlanty 1996 a Pekingu 2008. Dve strieborné olympijské medaily získal na Letných olympijských hrách v Sydney v roku 2000 a na Letných olympijských hrách v Aténach v roku 2004.</h3>
    <ul class="awards">
        <li class="one">LOH Atlanta 1996 - 1. miesto, vodný slalom</li>
        <li class="two">LOH Peking 2008 - 1. miesto, vodný slalom</li>
        <li class="three">LOH Atény 2004 - 2. miesto, vodný slalom</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
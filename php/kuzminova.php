<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="kuzminova.css">
    <title>Anastasia Kuzminová</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Anastasia Kuzminová</h1>
    <h2>Disciplína - biatlon</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Anastasia Kuzminová'";
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
    <p class="biotext">Anastasiya Vladimirovna Kuzmina je bývalá slovenská biatlonistka ruskej národnosti, ktorá predtým ako začala reprezentovať Slovensko, reprezentovala Rusko. Je majsterka sveta v biatlone v pretekoch šprintu na 7,5 km.</h3>
    <ul class="awards">
        <li class="one">ZOH Vancouver 2010 - 1. miesto, 7.5km šprint</li>
        <li class="two">ZOH Soči 2014 - 1. miesto, 7.5km šprint</li>
        <li class="three">ZOH Pchjongčchang 2018 - 1. miesto, hromadný štart</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
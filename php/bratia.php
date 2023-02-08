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
    <h1>Peter a Pavol Hochschornerovci</h1>
    <h2>Disciplína - Vodný Slalom</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Peter a Pavol Hochschornerovci'";
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
    <p class="biotext">Peter a Pavol Hochschornerovci sa narodili v rodine nadšencov kanoistiky v Bratislave. Otec, ktorý je zároveň ich trénerom, aj mama reprezentovali Československo v slalome, zatiaľ čo ich sestra, ktorá im robí manažérku, pretekala na šprintérskych podujatiach za Slovensko.</h3>
    <h3>Ocenenia a vyznamenania</h3>
    <ul class="awards">
        <li class="one">Trojnásobní olympijskí víťazi v C2 (Sydney 2000, Atény 2004, Peking 2008)</li>
        <li class="two">Deväťnásobní majstri sveta v C2 (1999, 2002, 2003, 2005, 2006, 2007, 2009, 2010, 2014)</li>
        <li class="three">Sedemnásobní majstri Európy v C2 (1998, 1999, 2003, 2005, 2006, 2008, 2010)</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
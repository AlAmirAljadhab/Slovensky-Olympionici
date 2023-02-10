<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="rehak.css">
    <title>Zuzana Rehák-Štefečeková</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Zuzana Rehák-Štefečeková</h1>
    <h2>Disciplína - športová streľba</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Zuzana Štefečeková'";
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
    <p class="biotext">Štefečeková sa narodila v Nitre, kde aj vyrastala. V detstve hrávala tenis, no nebavilo ju behávať, v 12 rokoch začala so športovou streľbou, špecializujúc sa na trap. Vyštudovala misijnú a charitatívnu prácu na Vysokej škole zdravotníctva a sociálnej práce sv. Alžbety.</h3>
    <ul class="awards">
        <li class="one">LOH Peking 2008 - 2. miesto, trap</li>
        <li class="two">LOH Londýn 2012 - 2. miesto, trap</li>
        <li class="three">LOH Tokio 2020 - 1. miesto, trap</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
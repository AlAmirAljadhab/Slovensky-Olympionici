<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="knaz.css">
    <title>Slavomír Kňazovický</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Slavomír Kňazovický</h1>
    <h2>Disciplína - kanoistika</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Slavomír Kňazovický'";
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
    <p class="biotext">Slavomír Kňazovický, je bývalý slovenský športovec, reprezentant v rýchlostnej kanoistike. Bol účastníkom Olympijských hier v roku 1992 v Barcelone, v roku 1996 v Atlante (USA), kde získal striebornú medailu a v roku 2000 v Sydney. V roku 1998 sa stal majstrom Európy.</h3>
    <ul class="awards">
        <li class="one">1996 OH Atlanta - 2. miesto, C1 500m</li>
        <li class="two">MS Miláno 1999 - 3. miesto, C1 200m</li>
        <li class="three">MS Szeged 1998 - 2. miesto, C1 200 m</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
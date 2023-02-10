<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="moravcova.css">
    <title>Martina Moravcová</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Martina Moravcová</h1>
    <h2>Disciplína - plávanie</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Martina Moravcová'";
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
    <p class="biotext">Martina Moravcová je bývalá slovenská plavkyňa a plavecká trénerka. Je najlepšou plavkyňou v histórii Slovenska a jednou z najúspešnejších plavkýň sveta vo svojej ére. Spolu získala 67 medailí na vrcholových podujatiach - 2 z olympijských hier, 22 z majstrovstiev sveta a 44 z majstrovstiev Európy.</h3>
    <ul class="awards">
        <li class="one">LOH Sydney 2000 - 2. miesto, 100 m motýlik</li>
        <li class="two">LOH Sydney 2000 - 2. miesto, 200 m v.sp.</li>
        <li class="three">MS Atény 2000 - 1. miesto, 100 m polohovka</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
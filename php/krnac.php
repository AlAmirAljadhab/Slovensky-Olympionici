<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="krnac.css">
    <title>Jozef Krnáč</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Jozef Krnáč</h1>
    <h2>Disciplína - džudo</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Jozef Krnáč'";
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
    <p class="biotext">S judom začal v 4 rokoch v krúžku v Bratislave pod vedením trénera Adamova. Od 6 rokov sa pripravoval v Pozemných stavbách Bratislava pod vedením Miroslava Lipovského. Vrcholovú prípravu podstupoval v klube Slávia STU pod vedením Rastislava Mezovského. Bol zamestnancom Národného športového centra spadajúceho pod MŠSR.</h3>
    <ul class="awards">
        <li class="one">LOH 2004 Athény - 2. miesto, poloľahká váha</li>
        <li class="two">ME 2002 Maribor - 2. miesto, poloľahká váha</li>
        <li class="three">ME 2001 Paríž - 3. miesto, poloľahká váha</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
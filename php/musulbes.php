<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="musulbes.css">
    <title>David Musuľbes</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>David Musuľbes</h1>
    <h2>Disciplína - zápasenie</h2>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'David Musuľbes'";
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
    <p class="biotext">David Vladimirovič Musuľbes je bývalý slovenský reprezentant v zápasení vo voľnom štýle do 120 kg. Má osetskú národnosť. Ešte ako ruský občan získal zlatú medailu z olympijských hier 2000 v hmotnostnej kategórií do 120 kg.</h3>
    <ul class="awards">
        <li class="one">MS Teherán, Irán 2002 - 1. miesto, voľný štýl do 120 kg</li>
        <li class="two">MS Sofia, Bulharsko 2003 - 1. miesto, voľný štýl do 130 kg</li>
        <li class="three">LOH Sydney 2000 - 1. miesto, voľný štýl do 120 kg</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
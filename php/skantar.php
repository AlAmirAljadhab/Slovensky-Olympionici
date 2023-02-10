<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="skantar.css">
    <title>Ladislav a Peter Škantárovci</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Ladislav a Peter Škantárovci</h1>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Ladislav a Peter Škantárovci'";
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
    <p class="biotext">Ladislav a Peter Škantárovci sú slovenský vodnoslalomári, narodený v Kežmarku. Pri svojej prvej účasti na olympiáde - na Letných olympijských hrách 2016 v Riu de Janeiro získali zlatú medailu.</h3>
    <ul class="awards">
        <li class="one">LOH Rio de Janeiro 2016 - 1. miesto, C2</li>
        <li class="two">LOH La Seu d'Urgell 2009 - 1. miesto, C2</li>
        <li class="three">LOH La Seu d'Urgell 2009 - 1. miesto, 3xC2</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
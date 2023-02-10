<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="benus.css">
    <title>Matej Beňuš</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Matej Beňuš</h1>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Matej Beňuš'";
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
    <p class="biotext">Matej Beňuš (* 2. november 1987, Bratislava) je slovenský vodnoslalomár a vodný zjazdár, ktorý súťaží v disciplíne C1 a je členom vodnoslalomárskeho oddielu klubu ŠKP Bratislava. Je taktiež členom slovenského reprezentačného družstva.</h3>
    <ul class="awards">
        <li class="one">8 zlatých medailí z MS vo vodnom slalome</li>
        <li class="two">7 zlatých medailí z majstrovstiev Európy v kategórii hliadok</li>
        <li class="three">Strieborná medaila na Letných olympijských hrách 2016</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
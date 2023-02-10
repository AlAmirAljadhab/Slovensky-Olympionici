<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="hurajt.css">
    <title>Pavol Hurajt</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Pavol Hurajt</h1>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Pavol Hurajt'";
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
    <p class="biotext">Pavol Hurajt (* 4. február 1978, Poprad) je bývalý slovenský biatlonista. 
        Na Zimných olympijských hrách 2010 vo Vancouvri získal bronzovú medailu v disciplíne pretekov s hromadným štartom na 15 km.
        Pochádza zo Štrby, je ženatý (manželka Janka). 
        Absolvoval štúdium na Fakulte humanitných vied Univerzity Mateja Bela v Banskej Bystrici, kde získal titul Mgr. Je členom klubu VŠC Dukla Banská Bystrica. </h3>
    <ul class="awards">
        <li class="one">3 miesto na Zimných olympijských hrách v roku 2010 na preteku s hromadným štartom</li>
        <li class="two">7 miesto na Zimných olympijských hrách v roku 2010 v šprinte</li>
        <li class="three">5 miesto na Zimných olympijských hrách v roku 2010 vo vytrvalostných pretekoch</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
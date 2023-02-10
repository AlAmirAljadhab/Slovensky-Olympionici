<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="gonci.css">
    <title>Jozef Gönci</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Jozef Gönci</h1>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Jozef Gönci'";
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
    <p class="biotext">Jozef Gönci je bývalý slovenský športový strelec, ktorý získal dve bronzové medaily na olympijských hrách v roku 1996 a 2004. Vo svetovom rebríčku sa v marci 2007 nachádzal na 5. mieste. Svoju kariéru ukončil po LOH 2012 v Londýne, odvtedy pôsobí v štruktúrach slovenského športu ako funkcionár.</h3>
    <ul class="awards">
        <li class="one">1999 1. miesto SP Mníchov</li>
        <li class="two">2001 1. miesto SP Atlanta</li>
        <li class="three">2004 3. miesto OH Atény, vzduchová puška 60 rán na 10 m</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
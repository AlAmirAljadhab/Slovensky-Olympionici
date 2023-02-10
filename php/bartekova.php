<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="footer_index.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bartekova.css">
    <title>Danka Barteková</title>
</head>
<body>
    <?php include "header.php"?>
    <h1>Danka Barteková</h1>
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
            $sql = "SELECT * FROM bolest WHERE meno = 'Danka Barteková'";
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
    <p class="biotext">Danka Barteková je slovenská olympijská športovkyňa, ktorá sa špecializuje na streľbu z pušky. Narodila sa 7. marca 1989 v meste Kežmarok na Slovensku. Barteková začala svoju atletickú kariéru v mladom veku a rýchlo prejavila prirodzený talent na streľbu.</h3>
    <ul class="awards">
        <li class="one">Viacnásobné medaily na majstrovstvách Európy v puškových disciplínach žien</li>
        <li class="two">Viacnásobné medaily na majstrovstvách sveta v puške žien</li>
        <li class="three">Winner of the Giant Slalom Crystal Globe (2021)</li>
    </ul>
<footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
</footer>
</body>
</html>
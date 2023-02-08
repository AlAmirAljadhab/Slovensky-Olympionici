<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tabulka Vitazov</title>
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php include "header.php"?>
    <div class="container my-5">
        <h2>Naši Vítazy</h2>
        <table class="table">
            <thead>
                <tbody>
                <?php
                    require_once "db_connect.php";
                    
                    $sortColumn = isset($_GET['sortColumn']) ? $_GET['sortColumn'] : 1;
                    $sortOrder = isset($_GET['sortOrder']) ? $_GET['sortOrder'] : 'ASC';

                    $sql = "SELECT * FROM bolest ORDER BY $sortColumn $sortOrder";
                    $result = $conn->query($sql);

                    if (!$result) {
                        die("Nieco zlyhalo: " . $conn->error);
                    }
                        $columns = $result->fetch_fields();

                        echo "<table>";
                        echo "<thead>";
                        echo "<tr>";

                        foreach ($columns as $column) {
                            $sortUrl = "?sortColumn=$column->name&sortOrder=ASC";
                            if ($sortColumn == $column->name) {
                              $sortUrl = "?sortColumn=$column->name&sortOrder=DESC";
                            }
                            echo "<th><a id='sorting' href='$sortUrl'>$column->name</a></th>";
                        }
                        echo "<th>Akcie</th>";
                        echo "</tr>";
                        echo "</thead>";
                    
                        echo "<tbody>";
                        //citanie dat z databazy
                        while($row = $result->fetch_assoc()) {
                        // Generate HTML for the row
                            echo "<tr>";
                            echo "<td>$row[Meno]</td>";
                            echo "<td>$row[Disciplina]</td>";
                            echo "<td>$row[Zlato]</td>";
                            echo "<td>$row[Striebro]</td>";
                            echo "<td>$row[Bronz]</td>";
                            echo "<td>$row[Rok]</td>";
                            echo "<td>$row[Miesto]</td>";
                            echo "<td>$row[Typ]</td>";
                            echo "<td>";
                            echo "<a class='btn btn-primary -btn-sm' href='/php/edit.php?id=$row[Meno]'>Uprav</a>";
                            echo "<a class='btn btn-danger -btn-sm' href='/php/delete.php?id=$row[Meno]'>Vymaž</a>";
                            echo "</td>";
                            echo "</tr>"; } 
                    ?>
                </tbody>
            </thead>
        </table>
    </div>
 <footer>
    <p class="cpyright">Copyright &copy; DSO</p>
    <p class="autor">Autor: Denis Lukac</p>
 </footer>
</body>
</html>
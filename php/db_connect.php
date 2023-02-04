<?php
$servername = "localhost";
                    $username = "MiroSkrutka";
                    $password = "SkrutkaTypu17";
                    $dbname = "wufufuf";
                    //Vytvorenie Spojenia
                    $conn = new mysqli($servername, $username, $password, $dbname);

                        //Kontrola pripojena
                    if ($conn->connect_error) {
                        die("Spojenie Zlyhalo: ". $conn->connect_error);
                    }
?>
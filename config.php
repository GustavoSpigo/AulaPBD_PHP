<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "pokemongo";

    $conn = new PDO("mysql:host=$servername",
                    $username,
                    $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->query(" USE $databasename;");
?>
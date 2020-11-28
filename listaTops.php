<?php
    include("config.php");

    $comando = $conn->prepare("SELECT * 
                                 FROM jogador 
                                ORDER BY exp DESC 
                                LIMIT 3");
    $comando->execute();

    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    
    $json = json_encode(array("objetos" => $resultado));
    print_r($json);
?>
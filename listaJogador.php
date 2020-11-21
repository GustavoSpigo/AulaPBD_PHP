<?php
    include("config.php");

    $comando = $conn->prepare("SELECT * FROM jogador WHERE nick = :nick ");
    $comando->execute([
        ":nick" => $_POST['nick']
    ]);

    $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);
    
    $json = json_encode(array("objetos" => $resultado));
    print_r($json);
?>
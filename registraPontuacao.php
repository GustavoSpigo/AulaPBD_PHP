<?php
    include("config.php");

    $comando = $conn->prepare("UPDATE jogador SET exp = :exp WHERE nick = :nick ");
    $comando->execute([
        ":nick" => $_POST['nick'],
        ":exp" => $_POST['pontos']
    ]);

    if($comando->rowCount(PDO::MYSQL_ATTR_FOUND_ROWS)==1){
        echo "Update deu bom";
    }else{
        echo "Update deu ruim";
    }
?>
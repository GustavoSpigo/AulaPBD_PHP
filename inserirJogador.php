<?php
    include("config.php");

    $comando = $conn->prepare("INSERT INTO jogador
                                (nick, level, email, senha, exp, 
                                qtdeMaxMochila, qtdeMaxPokemon, 
                                equipe, dinheiro, genero) 
                               VALUES 
                                (:nick, 1  , :email , :senha, 0,
                                200, 200,
                                NULL, 0, :genero) ");

    $comando->execute([
        ":nick" => $_POST['nick'],
        ":email" => $_POST['email'],
        ":senha" => $_POST['senha'],
        ":genero" => $_POST['genero']
    ]);

    if($comando->rowCount(PDO::MYSQL_ATTR_FOUND_ROWS)==1){
        echo "Insert deu bom";
    }else{
        echo "Insert deu ruim";
    }

?>
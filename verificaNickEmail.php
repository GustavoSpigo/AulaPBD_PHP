<?php
    include("config.php");

    //Faz a consulta para verificar existências prévias 
    $comando = $conn->prepare("SELECT * FROM jogador WHERE nick = :nick OR email = :email ");
    $comando->execute([
        ":nick" => $_POST['nick'],
        ":email" => $_POST['email']
    ]);

    //Quantidade de linhas resultantes da consulta
    if($comando->rowCount()==0){
        //Escreve na saída padrão
        echo "Nick e Email nao repete";
    }else{
        //Guarda o resultado da consulta no formato array
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        //Verifica qual informação repete
        if($resultado[0]["nick"] == $_POST['nick'])
        {
            echo "Nick já existente";
        }
        elseif($resultado[0]["email"] == $_POST['email']){
            echo "E-mail já existente"; 
        }
        else
        {
            echo "Tem coisa repetida";
        }
    }
?>
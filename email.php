<?php

    if(isset($_POST['email']) && !empty($_POST['email'])){
    
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "joao_dacosta@live.com";
    $subject = "Contato -".$nome;
    $body = "Nome: ".$nome."\r\n".
            "Email: ".$email."\n".
            "Mensagem: ".$mensagem;
    $header = "From:".$email."\r\n".
                "Reply-to".$email."\r\n".
                "X=Mailer:PHP/".phpversion();
    
    if(mail($to,$subject,$body,$header)){
        echo("Email enviado com sucesso!");
    }else{
        echo("O Email não pode ser enviado");
    }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
</head>
<body>
    <?php
        $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não informado]";
        $sobrenome = isset($_GET["sobrenome"])?$_GET["sobrenome"] :"[Não informado]";
        $email = isset($_GET["email"])?$_GET["email"] :"[Não informado]"; 
        $numero = isset($_GET["numero"])?$_GET["numero"] :"[Não informado]";
        $mensagem = isset($_GET["mensagem"])?$_GET["mensagem"] :"[Não informado]";

        $to = 'oliveiranixson74@gmail.com';

        $subject = 'Encontro do Javec';

        $msg = "<p>Nome: $nome</p>". 
        "<p>Sobrenome: $sobrenome </p>". 
        "<p>Telefone: $numero</p>". 
        "<p>Mensagem: $mensagem</p>";


        mail($to,$subject,$msg,'From: '.$email);



        echo "$msg";


        

    ?>
    
</body>
</html>
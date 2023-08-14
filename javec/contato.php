<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/scrollreveal"></script>
    
    <link rel="stylesheet" href="_css/style-contato.css">

    <link rel="shortcut icon" href="_images/cruz-icone.ico" type="image/x-icon">

    <title>JAVEC OFICIAL</title>
</head>
<body>

    <?php 
    
        include '_componentes/header.php';
    
    ?>

    <main>
           <h1>Deixe sua mensagem aqui</h1>

           
            <form action="emailMessage.php" method="get" autocomplete="on">

                <fieldset>
                    <legend>Dados pessoais</legend>
                    <p>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" required placeholder="Primeiro Nome">
                    </p>
                    <p>
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" name="sobrenome" id="sobrenome" required placeholder="Último Nome">
                    </p>
                    <p>
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required  placeholder="Email atual">
                    </p>
                    <p>
                        <label for="telefone">Whatsapp: </label>
                        <input type="tel" name="numero" id="numero" required  placeholder="Número atual" max="122">
                    </p>
                    
             </fieldset>
                    <p>
                        <label for="texto">Mensagem</label>
                        <input type="text" name="mensagem" id="mensagem" required placeholder="Digite seu texto aqui." style="height:5em;" maxlength="300">
                    </p>

                <p>
                    Enviar
                    <input type="submit" name="submit" value="submit">
                </p>
                <p>
                    Limpar
                    <input type="reset" value="Limpar">
                </p>
                
        </form>
    </main>
    
    <?php 
        include '_componentes/footer.php';
    ?>
 
    <?php 
        include '_componentes/direitos.php';
    ?>

    <?php 
        include '_componentes/redes.php';
    ?>

    
</body>
</html>

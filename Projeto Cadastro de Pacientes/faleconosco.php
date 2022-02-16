<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css.css">
    <script src="js.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Sorriso - Inicio</title>
</head>
<body>
    <div class="cabeca">
        <h1>MAX SORRISOS</h1>
    </div>
    <div class="menu">
        
            <a class="opt" href="index.php">Início</a>
            <a class="opt" href="cadastro.php">Cadastro</a>
            <a class="opt" href="tabela.php">Tabela</a>
            <a class="opt" href="#">Fale Conosco</a>
            
    </div>

    <div class="body">
        <div class="form">

            <form class="formulario-cadastro" action="" method="post">
                <br>
                <h2>Fale Conosco</h2><br>
                <br>
                <p>Nome:</p>
                <input type="text" name="nome" placeholder="Nome"><br>
                <br>
                <p>Telefone:</p>
                <input type="tel" name="telefone" placeholder="Telefone"><br>
                <br>
                <p>E-Mail:</p>
                <input type="email" name="email" placeholder="E-Mail"><br>
                <br>
                
                <textarea id="faleCon" name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea><br>
                <input type="submit" value="Enviar">
                <br>
                <br>
                <br>
                <br>
            </form>
        </div>
    </div>
</body>
</html>
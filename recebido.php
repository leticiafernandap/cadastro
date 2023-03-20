<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro Recebido</title>
</head>
<body>
        <h1>Cadastro Recebido</h1>
        <p><b>Nome recebido foi: </br><?php echo $_GET["nome"]; ?> </p>
        <p><b>Telefone recebido foi: </br><?php echo $_GET["telefone"]; ?> </p>
        <p><b>Email recebido foi: </br><?php echo $_GET["email"]; ?> </p>
        <p><b>CPF recebido foi: </br><?php echo $_GET["cpf"]; ?> </p>
        <p><b>Endereço recebido foi: </br><?php echo $_GET["endereco"]; ?> </p>
        <p><b>Cidade recebido foi: </br><?php echo $_GET["cidade"]; ?> </p>
        <p><b>País recebido foi: </br><?php echo $_GET["pais"]; ?> </p>
        <br/>
        <a href="cadastro.php">Voltar</a>

        </form>
    </body>
</html>
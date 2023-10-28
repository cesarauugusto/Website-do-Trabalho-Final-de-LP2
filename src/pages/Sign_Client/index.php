<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> Seguro de Carros </title>
</head>

<body>
    <nav>

        <div class="logo">
            <img src="logo.png" width="25">
            <a href="index.php"> New Protection </a>
        </div>

        <ul>
        <li> <a href="../Home/index.php"> Home </a> </li>
            <li> <a href="../Accidents/index.php"> Cadastrar Acidentes </a> </li>
            <li> <a href="../Sign_Car/index.php"> Cadastrar Carro </a> </li>
        </ul>

    </nav>
    <section class="banner">
        <div class="texto">
            <h1 class="titulo"> Cadastro de Clientes </h1>
            
            <div class="tela-login">
                <form method="POST" action="../Sign_Client/recebe_dados.php">
                 <br>
                <div class="textfiled">
                    <br>
                    <input type="text" placeholder="Cliente" name="nome">
                    <br>
                    <input type="number" placeholder="CPF" name="cpf">
                    <br>
                    <input type="text" placeholder="Cidade" name="cidade">
                    <br>
                    <input type="number" placeholder="Telefone" name="telefone">
                </div>
                <br>
             </div>
            <div class="botoes">
                <button class="overlay"> Enviar! </button>
                </form>
                <a href='../Sign_Client/resultado.php'> <button class="n-overlay"> Listar Clientes </button>> </a>
            </div>
        </div>
        
    </section>
</body>

</html>
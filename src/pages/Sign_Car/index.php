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
            <li> <a href="../Sign_Client/index.php"> Cadastrar Cliente </a> </li>
            <li> <a href="../Accidents/index.php"> Cadastrar Acidentes </a> </li>
        </ul>

    </nav>
    <section class="banner">
        <div class="texto">
            <h1 class="titulo"> Cadastro de Veículo </h1>
            <div class="tela-login">
                <br>
                <div class="selectcli">
                    <select name="select">
                        <option value="valor1">Propietário</option>

                        <?php 
                        $sql = "select * from clientes";
                        $conexao = mysqli_connect("localhost", "root", "", "banco_site");
                        $busca = mysqli_query($conexao, $sql); 
                        echo  mysqli_query($conexao, $sql)->num_rows; 
                        while ($dados = mysqli_fetch_array($busca)) { ?>                            
                             <option value= "<?php echo $dados['id'] ?>"><?php echo $dados["nome"] ?></option>
                        <?php } ?>


                    </select>
                    <br>
                </div>
                <form method="POST" action="../Sign_Car/recebe_dados.php">
                <div class="textfiled">
                    <br>
                    <input type="text" placeholder="Placa" name="placa">
                    <br>
                    <input type="text" placeholder="Marca" name="marca">
                    <br>
                    <input type="text" placeholder="Modelo" name="modelo">
                    <br>
                    <input type="text" placeholder="Cor" name="cor">
                </div>
               
                <br> <br>
            </div>
            <div class="botoes">
                <button class="overlay"> Enviar! </button>
                </form>
                <a href='../Sign_Car/resultado.php'> <button class="n-overlay"> Listar Carros </button>> </a>
            </div>

        </div>
    </section>
</body>

</html>
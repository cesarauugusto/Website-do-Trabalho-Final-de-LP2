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
            <li> <a href="../Sign_Car/index.php"> Cadastrar Carro </a> </li>
        </ul>

    </nav>
    <section class="banner">
        <div class="texto">
            <h1 class="titulo"> Cadastro de Acidentes </h1>
            <div class="tela-login">
                <br> <br>

                <div class="selectcli">

                   

                        <select name="select">
                            <option value="valor1">Placa</option>
                            <?php
                            $sql = "select * from carros";
                            $conexao = mysqli_connect("localhost", "root", "", "banco_site");
                            $busca = mysqli_query($conexao, $sql);
                            echo  mysqli_query($conexao, $sql)->num_rows;
                            while ($dados = mysqli_fetch_array($busca)) { ?>
                                <option name="placa" value="<?php echo $dados['id'] ?>"><?php echo $dados["placa"] ?></option>
                            <?php } ?>

                        </select>
                        <form method="POST" action="../Accidents/recebe_dados.php">
                        <div class="textfiled">
                            
                            <br>
                            <input type="text" placeholder="Cidade" name="cidade">
                            <br>
                            <input type="date" placeholder="Data" name="data">
                            <br>
                            <input type="text" placeholder="Observação" name="observacao">
                            <br>
                        </div>

                </div>
                <div class="botoes">
                    <button class="overlay"> Enviar! </button>
                    </form>
                    <a href='../Accidents/resultado.php'> <button class="n-overlay"> Listar Acidentes </button> </a>
                </div>


            </div>
    </section>
</body>

</html>
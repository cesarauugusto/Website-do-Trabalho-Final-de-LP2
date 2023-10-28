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
            <li> <a href="../Accidents/index.php"> Cadastrar Acidentes </a> </li>
            <li> <a href="../Sign_Client/index.php"> Cadastrar Cliente </a> </li>
            <li> <a href="../Sign_Car/index.php"> Cadastrar Carro </a> </li>

        </ul>

    </nav>
    <section class="banner">
        <div class="texto">
            <div class="tela">
                <?php

                $minhaConexao = mysqli_connect("localhost", "root", "", "banco_site");

                $strin = "select * from acidentes";
                $num_acidentes =  mysqli_query($minhaConexao, $strin)->num_rows;
                $acidente = $num_acidentes;

                $strin = "select * from clientes";
                $cliente  =  mysqli_query($minhaConexao, $strin)->num_rows;

                $strin = "select * from carros";
                $carro  =  mysqli_query($minhaConexao, $strin)->num_rows;

                ?>
                
                <label class="textmonitor">Acidentes:</label>
                <label class="textmonitor"><?php echo $acidente ?> </label>
                <br>
                <label class="textmonitor">Clientes Cadastrados: </label>
                <label class="textmonitor"><?php echo $cliente ?> </label>
                <br>
                <label class="textmonitor">Carros Cadastrados: </label>
                <label class="textmonitor"><?php echo $carro ?> </label>
            </div>
            <div class="botoes">

                <br> <br>
                <a href="../Accidents/index.php"> <button class="n-overlay"> Cadastrar/Listar Acidentes </button> </a>
                <br> <br>
                <a href="../Sign_Client/index.php"><button class="n-overlay"> Cadastrar/Listar Clientes </button></a>
                <br> <br>
                <a href="../Sign_Car/index.php"><button class="n-overlay"> Cadastrar/Listar Carro </button></a>
                <br> <br>

            </div>
        </div>
    </section>
    <script>
        //<li> <a href="../Pesquisar/index.php"> Pesquisar </a> </li>
        //<a href="../Pesquisar/index.php"><button class="n-overlay"> Pesquisar </button></a> 
    </script>
</body>

</html>
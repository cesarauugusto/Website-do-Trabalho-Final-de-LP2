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
    
    <?php
    $minhaConexao = mysqli_connect("localhost","root","","banco_site");
    $placa = $_POST['placa'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $cor = $_POST['cor'];
    $strin = "insert into carros (placa,marca,modelo,cor) values ('$placa','$marca','$modelo','$cor')";
    mysqli_query($minhaConexao,$strin);
    ?>

    <section class="banner">
        <div class="texto">
            <br> <br> <br> <br> <br> <br>
            
            <h1 class="titulo"> Cadastro Concluido</h1>
            <div class="botoes">

                <a href="../../pages/Home/index.php"><button class="overlay" > Voltar para Home </button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>
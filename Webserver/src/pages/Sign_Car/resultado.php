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
            <br> <br>

            <?php
            $sql = "select * from carros";
            $conexao = mysqli_connect("localhost", "root", "", "banco_site");
            $busca = mysqli_query($conexao, $sql); ?>
            <table border="1">
                <colgroup>
                    <col span="2" style="background-color:#fff">
                    <col style="background-color:#fff">
                    <col style="background-color:#fff">
                    <col style="background-color:#fff">
                    <col style="background-color:#fff">
                </colgroup>
                <thead>
                    <tr>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Cor</th>
                        <th>Deletar Usuário</th>

                    </tr>
                </thead>
                <?php while ($dados = mysqli_fetch_array($busca)) {
                    $placa = $dados['placa'];
                    $marca = $dados['marca'];
                    $modelo = $dados['modelo'];
                    $cor = $dados['cor'];
                ?>

                    <td> <?php echo $placa  ?> </td>
                    <td><?php echo $marca ?> </td>
                    <td> <?php echo $modelo ?> </td>
                    <td><?php echo $cor ?> </td>
                    <td>
                    <form action="../Sign_Car/delcar.php" method="POST">
                            <button type="submit" name="delete_car" value="<?= $dados['id']; ?>">Deletar</button>
                        </form>
                    </td>

                    </tr>
                <?php } ?>
            </table>
            <div class="botoes">
                <a href="../../pages/Home/index.php"><button class="overlay"> Voltar para Home </button>
                    </form>
            </div>
        </div>
    </section>
</body>

</html>
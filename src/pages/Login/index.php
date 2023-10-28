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
            <li> <a href="https://wa.me/5588981875801?text=Ol%C3%A1,%20poderia%20me%20enviar%20informa%C3%A7%C3%B5es%20da%20empresa%20New%20Protection"> César Augusto victor - (88) 981875801 </a> </li>
        </ul>

    </nav>
    <section class="banner">
        <div class="texto">
            <h1 class="titulo"> Bem-Vindo(a) a New Protection </h1>
            <h2 class="sub_titulo"> A proteção que seu veiculo merece! </h2>
            <br>
            <div class="tela-login">
                <br>
                <h3 class="nome-login"> Login </h3>
                <div class="textfiled">
                    <input type="text" id="usuario" placeholder="Usuário">
                    <br>
                    <input type="password" id="senha" placeholder="Senha">
                </div> 
                <br><br>
            </div>
            <br>

            <div class="botoes">
                <button class="overlay" type="submit" onclick="logar(); return false"> Entrar </button>
            </div>

        </div>
    </section>
</body>

<script>
function logar(){

   var login = document.getElementById('usuario').value;
   var senha = document.getElementById('senha').value;

   if (login == "admin" && senha == "123") {
    location.href = "../Home/index.php"
   } else {
    alert('Usuário ou Senha incorreta');
   }
}
</script>

</html>
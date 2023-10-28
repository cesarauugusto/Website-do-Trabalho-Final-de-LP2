
<?php
    $minhaConexao = mysqli_connect("localhost","root","","banco_site");
    $id = $_POST['delete_car'];
    $strin = "delete from carros where id = $id";
  // echo $strin;
    mysqli_query($minhaConexao,$strin);
    ?>
    
<script>
       window.location.href = "../Sign_Car/resultado.php";
       alert("Deletado com sucesso.");
</script>
    
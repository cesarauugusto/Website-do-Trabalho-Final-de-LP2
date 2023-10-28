
<?php
    $minhaConexao = mysqli_connect("localhost","root","","banco_site");
    $id = $_POST['delete_accidents'];
    
    $strin = "delete from acidentes where id = $id";
  // echo $strin;
    mysqli_query($minhaConexao,$strin);

    ?>
<script>
       window.location.href = "../Accidents/resultado.php";
       alert("Deletado com sucesso.");
</script>
    
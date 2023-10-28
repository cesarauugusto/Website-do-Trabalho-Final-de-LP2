
<?php
    $minhaConexao = mysqli_connect("localhost","root","","banco_site");
    $id = $_POST['delete_cliente'];
    
    $strin = "delete from clientes where id = $id";
  // echo $strin;
    mysqli_query($minhaConexao,$strin);

    ?>
<script>
       window.location.href = "resultado.php";
       alert("Deletado com sucesso.");
</script>
    
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("mssql.php");
$consulta="SELECT *FROM PRODUTO";
$con=$mysqli->query($consulta) or die($mysqli->error);
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir Produto</title>
</head>
<body>
    <center>
    <form action="mssql.php" method="post">
        <div>
            <label for="produto">Digite o nome do produto:</label>
            <input type="text" id="produto" />
        </div>
      

        <div class="button">
            <button type="submit" name="excluir" >excluir</button>
        </div>
       
    </form>
</center>
	<table border="1">	
	<tr>
	<td>Id Produto</td>
	<td>Produto</td>
	<td>Preço</td>
	<td>Cor</td>
	</tr>
	<?php while($dados=$con->fetch_array()){?>
	<tr>
	<td><?php echo $dados["IDPROD"]?></td>
	<td><?php echo $dados["PRODUTO"]?></td>
	<td><?php echo $dados["PRECOS"]?></td>
	<td><?php echo $dados["COR"]?></td>
	</tr>
	<?php}?>
	</table>

</body>
</html>
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
    <title>Inserir produto</title>
</head>
<body>
    <center>
    <form action="mssql.php" method="post">
        <div>
            <label for="produto">Produto:</label>
            <input type="text" id="produto" />
        </div><br>
        <div>
            <label for="Precos">Preço:</label>
            <input type="texto" id="preco" />
        </div> <br>
        <div>
         Selecione a cor <select name="cor" id="cor">
  <option value="amarelo">Amarelo</option>
  <option value="Azul">Azul</option>
  <option value="mercedes">Vermelho</option>

</select>
           
        <div class="button">
            <button type="submit" name="enviar" >Inserir</button>
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
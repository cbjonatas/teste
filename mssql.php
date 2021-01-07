
<?php

 if (isset($_POST["enviar"])){
        $produto=$_POST["produto"];
        $precos=$_POST["precos"];
        $cor=$_POST["cor"];
		$instrucaoSQL = "INSERT INTO Produtos (nome,preco,cor)
		values($produto,$preco,$cor);"
}else(isset($_POST["atualizar"])){
        $produto=$_POST["produto"];
        $precos=$_POST["precos"];
        $cor=$_POST["cor"];
		$instrucaoSQL = "UPDATE produto
		SET preco = "$precos"
		WHERE "$produto";"
		
}elseif (isset($_POST["excluir"])){
        $produto=$_POST["produto"];
     
		$instrucaoSQL = "DELETE from produto
		WHERE "$produto";"
}

$dbhost   = localhost;   #Nome do host

$db       = teste;   #Nome do banco de dados

$user     = root; #Nome do usuário

$password = 123456;   #Senha do usuário

@mssql_connect($dbhost,$user,$password) or die

(“Não foi possível a conexão com o servidor!”);

@mssql_select_db(“$db“) or die

(“Não foi possível selecionar o banco de dados!”);


   
?>


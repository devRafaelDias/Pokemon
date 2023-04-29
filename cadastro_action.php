<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo</title>
</head>
<body>
	<h1>Você se tornou um treinador pokemon</h1>
<?php
	include("banco_dados_conexao.php");	
	
	try {
		$stmt = $dbh->prepare("insert into cadastro (loginUser,senha) values (?,?);");

		$stmt->bindParam(1, $_POST["login"]);
		$stmt->bindParam(2, $_POST["senha1"]);

		if($stmt->execute()){
			echo '<a href="lista.php">Minha conta</a>';
		}
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
?>  
</body>
</html>
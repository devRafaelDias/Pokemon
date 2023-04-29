<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include("banco_dados_conexao.php");	
	
	try {
		$stmt = $dbh->prepare("delete from cadastro where id = ?");
		$stmt->bindParam(1, $id);
		$id = $_GET["id"];
		if($stmt->execute())
            echo "Exclusão realizada com sucesso!";

	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage();
		die();
	}
?>  

<br><br><a href="cadastro_action.php">Voltar</a>

</body>
</html>
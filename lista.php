<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Excluir conta</h1>
    <?php
    
    include("banco_dados_conexao.php");

	try {
		$sth = $dbh->prepare('SELECT * from cadastro');
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);

        if (empty($result)){
            echo "Nenhum registro encontrado.";
        } else {
            foreach($result[0] as $index=>$values) {
                echo "$index - ";
            }echo "<br><br>";

            
            
            // escrevendo resultado do SELECT
            foreach($result as $row) {
                foreach($row as $value){
                    echo "$value - ";
                }
                echo "&nbsp;<a href='excluir.php?id=".$row["id"]."'>[Excluir]</a>&nbsp;";
                echo "<br><br>";
            }
        }
		$dbh = null;
	} catch (PDOException $e) {
		print "Error!: " . $e->getMessage() . "<br/><br><a href='cadastro_action.php'>voltar</a>";
		die();
	}
    ?>

    <br><br><a href="index.php">Voltar</a>
    
</body>
</html>
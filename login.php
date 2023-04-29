<?php
$users = $_POST['login'];
$senha = $_POST['senha'];
$mysqli = new mysqli("localhost:3308","root","","pokemon");
    $verifica =$mysqli->query("SELECT * FROM cadastro WHERE loginUser =
    '$users' AND senha = '$senha'") or die("erro ao selecionar");
    echo "SELECT * FROM cadastro WHERE loginUser =
    '$users' AND senha = '$senha'";

      if ($verifica->num_rows){
        header("Location:lista.php");
      }else{
        header("Location:index.php");
      }
?>
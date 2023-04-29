<?php
try {
	$host='localhost:3308';
	$db = 'pokemon';
	$username = 'root';
	$password = '';
	$dbh = new PDO('mysql:host='.$host.';dbname='.$db.'', $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage();
	die();
}
?>
<?php 
	$serveur="localhost";
	$login="root";
	$pass="";
	$db="Formulaire";

$nom=$_POST['nom'];
$pseudo=$_POST['pseudo'];
$email=$_POST['email'];
$pwd=$_POST['pass'];

	try{
			$conn=new PDO("mysql:host=$serveur;dbname=$db",$login,$pass);
			$conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


			$stmt = $conn -> prepare($sql1);
			$stmt -> bindParam(':nom', $nom);
			$stmt -> bindParam(':pseudo', $pseudo);
			$stmt -> bindParam(':email', $email);
			$stmt -> bindParam(':pwd', $pwd);

			$stmt -> execute();

			echo "<a href='index.php'>Retourner</a>";

	}
	catch(PDOException $erreur){
			echo "ECHEC : " .$erreur -> getMessage();
	}

 ?>
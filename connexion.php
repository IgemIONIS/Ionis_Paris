<?php 
require("./bdd.php");
if($connect){
	
	?>

	<!DOCTYPE html>
	<link rel="stylesheet" type="text/css" href="static/connexion.css">

	<html>
	<header>
		<a href="https://2020.igem.org/Team:Ionis_Paris">
			<img class="img" src="image/igemIonis.png">
		</a>
			<h1 class="titre">Connexion</h1>
	</header>
	
		<title>page de connexion</title>

		<div class="tohome"><a href="home.php" class="connexion">Home</a></div>
		<br>
		<br>

	
			<form action="connexion.php" method="POST" name="identification">
				<fieldset>
					<label for ="ID">Adresse email ou identifiant:</label>
					<br>
					<input type="text" name="ID" <?php if (isset($_COOKIE["MDP_incorrecte"])) {
						echo "value=".$_COOKIE["MDP_incorrecte"];
					}?>>
					<br>
					<br>
					<label for ="MDP">Mot de passe:</label>
					<br>
					<input type="text" name="MDP">

				</fieldset>
				<input type="submit" name="send" class="send" value="Envoyer">
			</form>	


			
		<?php
			

			if (isset($_POST["ID"]) && isset($_POST["MDP"])){
				$ID=$_POST["ID"];
				$MDP=$_POST["MDP"];
				$req='SELECT ID,mdp FROM logadmin';
				$resultat=mysqli_query($connect,$req);
				if($resultat==false)echo"Echec de l'exécution de la requête";
				else{
		//fetchsurchaquelignedelarequête
					while($ligne=mysqli_fetch_row($resultat)){
						if ($ID===$ligne[0]) {
							if ($MDP===$ligne[1]) {
								echo "connexion admin autoriser <br>";
								header('location: validation.php');
							}
						}

					}
				}
			}



		}
		else{
			echo "connexion à la base de donnée impossible";
		}

		?>
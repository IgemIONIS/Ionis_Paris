<!DOCTYPE html>
<?php
$connect=mysqli_connect("127.0.0.1","root","","testigem");
?>
<head>
	<link rel="stylesheet" href="stylesheet.css">
	<div>
		<h1 class="titre"><img class="img" src="image/igemIonis.png">Software tool IGEM IONIS</h1>

	</div>

	
	<link rel="stylesheet" href="lib/chosen/chosen.css" >
	<nav class="navbar">
		<a href="connexion.php" class="connexionAdmin"> admin</a>
	</nav>
	
	

	

</head>
<body>
	<img class="logo" src="image/bactail.png">
	<button class="button" onclick="window.location.href='search.php'" style="vertical-align:middle"><a href="search.php" class="search"><span>search </span></button>
	
	
</body>

</html>
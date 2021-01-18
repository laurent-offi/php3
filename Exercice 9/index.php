<?php

	$random = rand(0,30);
	echo "Nombre aléatoire généré : $random <br>";
		for($i = 1; $i <= 100; $i++) {
			if($i != $random) {
				echo "i est égal $i <br/>";
			} else {
				break;
			}
		}

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 9 (3) PHP</title>
	</head>


</html>
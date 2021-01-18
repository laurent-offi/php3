<?php

  $j = random_int(1, 30);
        // $j = rand(1, 30);
        echo("nombre aléatoire généré : $j <br>");
        for ($i = 1; $i <= 100 ; $i++){
          echo "i : $i <br>";
          if ($i == $j){
            exit;
          }
        }

?>


<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Exercice 10 (3) PHP</title>
	</head>


</html>
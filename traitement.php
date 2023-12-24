<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <?php

  if(isset($_POST['envoyer'])){
  	if(empty($_POST['nom'])){
  		echo "Veuillez saisir votre nom!";
  

 $nom = $_POST['nom'];

  	}

  

  }else{

  	echo "Il faut valider votre saisie!";

  }

 
  ?>
</body>
</html>




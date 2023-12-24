<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transfert de Fichier</title>
</head>
<body>
   <form method="post" action="form.php" enctype="multipart/form-data">
   	<fieldset>
   		<legend>
   			<b>Transfert de Fichier</b>
   		</legend>
   		<p>
   			<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
   			<label for="fichier">Transfert de fichier:</label>
   			<input id="fichier" type="file" name="fichier">
   		</p>
   		
   		<p>
   			 <input type="submit" name="fichier_transmis" value="ENVOYER">
   			 <input type="reset" value="EFFACER">
   		</p>	  


   	</fieldset>
   </form>

   <?php

    if(isset($_POST['fichier_transmis'])){

    	if(preg_match("#jpeg|png|pdf|doc#", $_FILES['fichier'] ['type'])){

    		if(file_exists("telechargement/".$_FILES['fichier'] ['name'])){
    			echo $_FILES['fichier'] ['name']." existe deja!";
    		}else{

    			    $path = '../Formation/telechargement/';
      move_uploaded_file($_FILES['fichier'] ['tmp_name'], $path.$_FILES['fichier']['name']);
    		}

  

    	}else{

    		echo "Le type de fichier est invalide";
    	}

    }


   ?>
</body>
</html>
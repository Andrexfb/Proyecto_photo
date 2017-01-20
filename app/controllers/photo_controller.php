<?php

		require_once('../models/photo_model.php');
		$photo=new photo();
		
				$nombre=$_POST["nombre"];
				$categoria=$_REQUEST["categoria"];
				mkdir("../../resources/fotos/".$categoria."/".$nombre."/", 0700, true);
				$foto=$_FILES["foto"]["name"];
				$ruta=$_FILES["foto"]["tmp_name"];
				$destino="../../resources/fotos/".$categoria."/".$nombre."/".$foto;
				copy($ruta,$destino);
				$new_avion_data= array(
						'nombre'=>$nombre,
						'destino'=>$destino
						);
				$photo->set($new_avion_data);
				header("Location: ../../views/index.html");
	
?>
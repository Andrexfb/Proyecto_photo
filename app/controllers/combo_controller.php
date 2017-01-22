<?php
if(isset($_POST["action"])||isset($_GET["action"]))
	{
		require_once('../models/photo_model.php');
		$photo=new photo();
		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];	
	
		switch($action)
		{
			case 'combo1':
				$photo=new photo();
				$val=1;
				print_r($photo->get_all($val)); 
			break;
			case 'tabla':
				$photo=new photo();
				$val=2;
				print_r($photo->get_all($val)); 
			break;
			case 'categorias':
				$photo=new photo();
				$val=3;
				print_r($photo->get_all($val));
			break;
			
			case 'insert2':
				$mcategoria=$_POST["mcategoria"];
				if(!$photo->compara($mcategoria)) 
				{
					
					$photo->get($mcategoria);
					?>
					<script type="text/javascript">
					var mcategoria=$("#mcategoria").val(''); 
					toastr["success"]("Registro", "Listo");
              		location.reload();
					</script>
					<?php
				}
				else
				{
					?>
					<script type="text/javascript">
					toastr["error"]("No Se Registro", "Error");
					</script>
					<?php
				}
				
				break;

			default:
				echo "esto no esta bien";
			break;
	    }
    }
?>
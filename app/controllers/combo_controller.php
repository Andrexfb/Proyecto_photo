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
			

			default:
				echo "esto no esta bien";
			break;
	    }
    }
?>
<?php session_start();

	if(isset($_POST["action"])||isset($_GET["action"]))
	{
		require_once('../models/usuarios_model.php');
		$usua=new Usuario();

		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];
		switch ($action) {
				case 'session':
				$user=$_POST["user"];
				$password=$_POST["password"];

				if ($usua->get_all($user,$password))
				{
					?>
						<script type="text/javascript">
							Materialize.toast("Bienvenido",1500,'',function(){
								window.location="";
							});
						</script>
					<?php
				} 
				else
				{
					?>
						<script type="text/javascript">
							Materialize.toast("Datos ingresados no encontrados",1500);
						</script>
					<?php
				}
			break;
		
		}
	}
	else
	{
		echo "Error";
	}
?>
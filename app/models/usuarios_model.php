<?php
require_once('conexion.php');
	class Usuario extends DBAbstractModel {

	public function get(){
		
	}

	public function get_all($user='',$password='') {
		if($user != '' && $password != ''):
		$this->query = "SELECT *from usuarios WHERE usuario='".$user."' and contraseña='".$password."'";
		$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1)
			return true;
		return false;
	}
	public function set() {

	}

	public function edit() {
	
	}

	public function delete() {
	}

	function __construct()
	{

	}

	function __destruct() {
		unset($this);
	}

	}
?>
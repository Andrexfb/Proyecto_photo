<?php
require_once('conexion.php');
class photo extends DBAbstractModel 
{
############################### PROPIEDADES ################################ 
    public $mcategoria;
    public $ciudad;
    public $id_tipo_avion;
    public $val;
################################# MÉTODOS ##################################
    # Traer datos de un usuario
    public function get_all($val='',$mcategoria='')
    {
        if($val==1)
        {
            $this->query="select *from categoria";
        return $this->get_results_from_query(); 
        }
        if($val==2)
        {
            $this->query="select foto.*, categoria.descripcion from foto, categoria where foto.id_categoria=categoria.id_categoria";
        return $this->get_results_from_query(); 
        }
        
     }
        
    
    public function get($mcategoria='')
    {
        $this->query = "insert into categoria values('','".$mcategoria."')";
        $this->execute_single_query();
    }
    
    public function set($user_data=array()) 
    {
        foreach ($user_data as $campo=>$valor):
        $$campo = $valor;
        endforeach;
        $this->query = "insert into foto (nombre,id_categoria,foto) values('".$nombre."','".$categoria."','".$destino."')";
        $this->execute_single_query();
    } 
    public function edit() 
    {
        
    } 
     public function delete() 
    {
        
    } 
    public function compara($mcategoria='') 
    {
       
            $this->query="SELECT * from categoria where descripcion='".$mcategoria."'";
            $this->get_results_from_query(); 
            return $this->rows;
    } 
    public function compara1($categoria='') 
    {
         $this->query="SELECT * from categoria where id_categoria='".$categoria."'";
            $this->get_results_from_query(); 
            return $this->rows;
    } 
    public function compara2() 
    {
        
    } 
    

    # Método constructor
    function __construct() 
    {

    } 
    function __destruct() 
    {
        unset($this);
    }
}
?>
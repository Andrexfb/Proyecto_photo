<?php
require_once('conexion.php');
class photo extends DBAbstractModel 
{
############################### PROPIEDADES ################################ 
    public $id_viajes;
    public $ciudad;
    public $id_tipo_avion;
    public $val;
################################# MÉTODOS ##################################
    # Traer datos de un usuario
    public function get_all($val='')
    {
        if($val==1)
        {
            $this->query="select *from categoria";
        return $this->get_results_from_query(); 
        }
        if($val==2)
        {
            $this->query="select *from foto";
        return $this->get_results_from_query(); 
        }
        
    }
    public function get()
    {
            
    }
    
    public function set($user_data=array()) 
    {
        foreach ($user_data as $campo=>$valor):
        $$campo = $valor;
        endforeach;
        $this->query = "insert into foto (nombre,foto) values('".$nombre."','".$destino."')";
        $this->execute_single_query();
    } 
    public function edit($id_viajes='',$fechai_mod='',$fechav_mod='') 
    {
        $this->query="update viajes set fecha_salida='".$fechai_mod."',fecha_llegada='".$fechav_mod."' where viajes.id_viajes='".$id_viajes."'";
            return $this->get_results_from_query();
    } 
    public function delete($id_viajes='') 
    {
        $this->query="delete from viajes where id_viajes='".$id_viajes."'";
        return $this->get_results_from_query();
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
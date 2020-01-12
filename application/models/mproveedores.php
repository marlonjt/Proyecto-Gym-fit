<?php

class Mproveedores extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getProveedor($s){		
    $p = $this->db->query('select id as idprov, nombre, sitreg from proveedores');
		return $p->result();
	
    } //metodo para realizar consulta a base de datos de proveedores, retorna resultado de consulta

    public function guardarProve($param)
    {
        $campos = array(
         'nombre' => $param['nombreprov'],
         'sitreg' => 1
          );

        $this->db->insert('proveedores',$campos);

        return $this->db->insert_id();


    }// metodo para insertar datos en base de datos segun columnas y valores traidos en array del controlador
    
    public function actualizarProveedor($param){
		$campos = array(
            'nombre' => $param['nombreprov'],
            'sitreg' => 1
        );

      $this->db->set($campos, FALSE);
      $this->db->where('id', $param['id']);
      $this->db->update('proveedores');
        
    }//metodo para actualizar proveedor en base de datos con los datos extraidos en  el controlador
     //y usando funciones del codeigniter para especificar condicion
    
     public function borrarProveedor($param){
      $this->db->where('id', $param['id']);
      $this->db->delete('proveedores');
    }
}

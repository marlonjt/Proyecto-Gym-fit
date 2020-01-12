<?php

class Mpersona extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function guardar($param)
    {
        $campos = array(
         'cedula' => $param['cedula'],
         'nombre' => $param['nombre'],
         'apellido' => $param['apellido']
        
        );

        $this->db->insert('personas',$campos);

        return $this->db->insert_id();

    }

    public function actualizarDatos($param)
    {
        $campos = array(
            'nombre' => $param['nombre'],
            'apellido' => $param['apellido']
         
        );

        $this->db->where('personas.id',$this->session->userdata('s_idPersona'));

        $this->db->update('personas',$campos);

        return 1;
    }

    public function eliminarPersona($idP)
    {
        $campos = array(
            'id' => $idP,
        );

        $this->db->delete('personas',$campos);
    }

    /* public function verificarPersona($testeo)
    {

    } */
}

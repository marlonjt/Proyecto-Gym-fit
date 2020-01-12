<?php

class Musuario extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
    }

    public function guardarUsuario($param)
    {
        $campos = array(
            'nomusuario' => $param['nomusuario'],
            'clave' => $param['clave'],
            'id' => $param['id'],
            'idpersona' => $param['id']
        );

        $this->db->insert('usuarios', $campos);
    }

    public function eliminarUsuario($idP)
    {
        $this->db->where('id',$idP);
        $this->db->delete('usuarios');
    }
}

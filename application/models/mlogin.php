<?php

class Mlogin extends CI_Model
{
    public function ingresar($user,$pass)
    {
        $this->db->select('p.id,u.id, p.nombre, p.apellido, p.cedula');
        $this->db->from('usuarios u');
        $this->db->join('personas p','p.id = u.idpersona');
        $this->db->where('u.nomusuario',$user);
        $this->db->where('u.clave',$pass);

        $resultado = $this->db->get();

        if($resultado->num_rows() == 1)
        {
            $r = $resultado->row();

            $s_usuario = array(
                's_idPersona' => $r->id,
                's_idUsuario' => $r->id,
                's_usuario' => $r->nombre.", ".$r->apellido
            );

            $this->session->set_userdata($s_usuario);

            return 1;
        }
        else
        {
            return 0;
        }
    }
}

<?php

class Cpersona extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mpersona');
        $this->load->model('musuario');
        $this->load->model('mlogin');
        $this->load->library('encrypt');
        

    }

    public function index()
    {
        $this->load->view('persona/vpersona');
    }

    public function guardar()
    {
        //person
        $param['cedula'] = $this->input->post('txtDNI');
        $param['nombre'] = $this->input->post('txtNombre');
        $param['apellido'] = $this->input->post('txtApPaterno');
      
        //user
        $paramUs['nomusuario'] = $this->input->post('txtUsuario');
        $paramUs['clave'] = $this->encrypt->sha1($this->input->post('txtClave'));

        $lastId = $this->mpersona->guardar($param);

            if($lastId > 0)
            {
                $paramUs['id'] = $lastId;
                $this->musuario->guardarUsuario($paramUs);
            }
    }

    public function actualizarDatos()
    {
        $param['nombre'] = $this->input->post('txtNombre');
        $param['apellido'] = $this->input->post('txtApPaterno');

        $this->mpersona->actualizarDatos($param);

        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('persona/vupdpersona');
        $this->load->view('layout/footer');
    }

    public function eliminarPersona()
    {
        $idP = $this->input->post('txtIdPersona');

        $this->musuario->eliminarUsuario($idP);
        $this->mpersona->eliminarPersona($idP);
        
    }
}



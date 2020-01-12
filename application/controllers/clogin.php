<?php

class Clogin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mlogin');
    }

    public function index()
    {
        $data['mensaje'] = "";
        $this->load->view('vlogin',$data);
    }

    public function ingresar()
    {
        $user = $this->input->post('txtUsuario');
        $pass = $this->encrypt->sha1($this->input->post('txtClave'));

        $res = $this->mlogin->ingresar($user,$pass);

        if($res == 1)
        {
           $this->success();
        }
        else
        {
            $data['mensaje'] = "<h4 align='center'> Usuario o contraseña incorrecto </h4>";
            
            $this->load->view('vlogin',$data);
        }
    }

    public function success(){
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('persona/vupdpersona');
        $this->load->view('layout/footer');
    }

    public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}

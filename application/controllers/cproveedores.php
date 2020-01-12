<?php

class Cproveedores extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mproveedores');
        if (!$this->session->userdata('s_idUsuario')) {
			redirect('clogin');
		}
    }

    public function index()
    {
        
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vproveedores');
        $this->load->view('layout/footer');    
                
    }
    
	public function getProveedor(){
            
		$s = 1;
		$resultado = $this->mproveedores->getProveedor($s);

		echo json_encode($resultado);
                
	}



    public function guardarProve()
    {
        //product
        $param['nombreprov'] = $this->input->post('txtNombre');
        
        $this->mproveedores->guardarProve($param);
        $param['idproveedor'] = $this->input->post('txtProveedor');

        redirect('cproveedores/index');
    }
    
    public function actualizarProve(){
                
        $param['id'] = $this->input->post('id');
		$param['nombreprov'] = $this->input->post('nombre');

        $this->mproveedores->actualizarProvee($param);
        
    }

    
    public function borrarProducto(){

        $param['id'] = $this->input->post('id');

    }

     public function borrarProveedor (){
    
        $param['id'] = $this->input->post('id'); //asigna el valor que viene del javascript de la id al valor id de la variable

        $this->mproveedores->borrarProveedor($param); //se llama a la funcion borrar proveedor del modelo proveedores y se envia la variable parametro

     }

     
}



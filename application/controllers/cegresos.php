<?php

class Cegresos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('megresos');
        if (!$this->session->userdata('s_idUsuario')) {
			redirect('clogin');
		}
    }

    public function index()
    {
        
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vegresos');
        $this->load->view('layout/footer');    
                
    }
    
    
	public function getProveedor(){
            
		$s = 1;
		$resultado = $this->megresos->getProveedor($s);

		echo json_encode($resultado);
                
	}



    public function guardarProd()
    {
        //product
        $param['nombreprod'] = $this->input->post('txtNombre');
        $param['cantidad'] = $this->input->post('txtCantidad');
        $param['precio'] = $this->input->post('txtPrecio');
        $param['idproveedor'] = $this->input->post('txtProveedor');
        $param['idcategoria'] = $this->input->post('txtCategoria');
        
        $this->megresos->guardarProd($param);

    }
    
    public function getCategoria(){
            
		$s = 1;
		$resultado = $this->megresos->getCategoria($s);

		echo json_encode($resultado);
                
	}

        
    public function getProductos(){
		echo json_encode($this->megresos->getProductos());
    }
    
    
    public function actualizarProducto(){
                
        $param['id'] = $this->input->post('id');
		$param['nombreprod'] = $this->input->post('nombreprod');
		$param['categ'] = $this->input->post('categ');
        $param['cant'] = $this->input->post('cant');
        $param['canteg'] = $this->input->post('canteg');
		$param['precio'] = $this->input->post('precio');
		$param['prov'] = $this->input->post('prov');

		$this->megresos->actualizarProducto($param);
    }
}



<?php

class Cingresos extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mingresos');
        if (!$this->session->userdata('s_idUsuario')) {
			redirect('clogin');
		}
    }

    public function index()
    {
        
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vingresos');
        $this->load->view('layout/footer');    
                
    }
    
    
	public function getProveedor(){
            
		$s = 1;
		$resultado = $this->mingresos->getProveedor($s);

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
        
        $this->mingresos->guardarProd($param);

        redirect('cingresos/index');

    }
    
    public function getCategoria(){
            
		$s = 1;
		$resultado = $this->mingresos->getCategoria($s);

		echo json_encode($resultado);
                
	}

        
    public function getProductos(){
		echo json_encode($this->mingresos->getProductos());
    }
    
    
    public function actualizarProducto(){
                
        $param['id'] = $this->input->post('id');
		$param['nombreprod'] = $this->input->post('nombreprod');
		$param['categ'] = $this->input->post('categ');
		$param['cant'] = $this->input->post('cant');
		$param['precio'] = $this->input->post('precio');
		$param['prov'] = $this->input->post('prov');

		$this->mingresos->actualizarProducto($param);
    }

    public function borrarProducto(){

        $param['id'] = $this->input->post('id');

        $this->mingresos->borrarProducto($param);
    }

    public function cargarVistaPdf()
    {
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vreportes');		
        $this->load->view('layout/footer');    
	
    }


    public function descargar(){

		$data = [];

		$hoy = date("dmyhis");

        //load the view and saved it into $html variable
        $html = 
        "<style>@page {
			    margin-top: 0.5cm;
			    margin-bottom: 0.5cm;
			    margin-left: 0.5cm;
			    margin-right: 0.5cm;
			}
			</style>".
        "<body>
        	<div style='color:#006699;'><b>".$this->input->post('txtPDF')."<b></div>".
        		"<div style='width:50px; height:50px; background-color:red;'>asdf</div>

        </body>";

 		        //this the the PDF filename that user will get to download
        $pdfFilePath = "cipdf_".$hoy.".pdf";
 
        //load mPDF library
        $this->load->library('M_pdf');
        $mpdf = new mPDF('c', 'A4-L'); 
 		$mpdf->WriteHTML($html);
		$mpdf->Output($pdfFilePath, "D");
	}
}



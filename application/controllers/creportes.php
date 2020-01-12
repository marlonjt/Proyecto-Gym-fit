<?php

class Creportes extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mreportes');
        $this->load->library('pdf');
    }

    public function index()
    {
        $data['producto_data'] = $this->mreportes->fetch();
        $this->load->view('layout/header');
        $this->load->view('layout/menu');
        $this->load->view('vreportes', $data);
        $this->load->view('layout/footer');    
    }

    public function pdfdetails()
    {
        
        $html_content = '<h3 align="center">Reporte de Ejercicios</h3>';
        $html_content .= $this->mreportes->fetch();
        $this->pdf->loadHtml($html_content);
        $this->pdf->render();
        $this->pdf->stream("reporte".".pdf", array("Attachment"=>0));
        
    }

}

?>

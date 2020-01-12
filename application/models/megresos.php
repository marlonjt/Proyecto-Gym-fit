<?php

class Megresos extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getProveedor($s){		
    $p = $this->db->query('select id as idprov, nombre, sitreg from proveedores where sitreg = 1');
		return $p->result();
	
    } //metodo para realizar consulta a base de datos de proveedores, retorna resultado de consulta
    public function getCategoria($s){		
    $p = $this->db->query('select id as idcat, nombrecat, sitregcat from categorias where sitregcat = 1');   
		return $p->result();
      //metodo para realizar consulta a base de datos de categorias, retorna resultado de consulta
    }

    public function guardarProd($param)
    {
        $campos = array(
         'nombreprod' => $param['nombreprod'],
         'cantidad' => $param['cantidad'],
         'precio' => $param['precio'],
         'idproveedor' => $param['idproveedor'],
         'idcategoria' => $param['idcategoria']
          );

        $this->db->insert('productos',$campos);

        return $this->db->insert_id();

    }// metodo para insertar datos en base de datos segun columnas y valores traidos en array del controlador
    
    public function getProductos(){

		$this->db->select("p.id, p.nombreprod, c.nombrecat, p.cantidad, p.precio, prov.nombre, p.idcategoria as idcat, p.idproveedor as idprov", false);
		$this->db->from('productos p');
		$this->db->join('proveedores prov','p.idproveedor = prov.id');
    $this->db->join('categorias c','p.idcategoria = c.id');

		$r = $this->db->get();
		return $r->result();
      //metodo para obtener productos usando consulta con funciones del codeigniter para hacer las consultas
    }
    
    public function actualizarProducto($param){
		$campos = array(
			'nombreprod' => $param['nombreprod'],
			'idcategoria' => $param['categ'],
			'cantidad' => $param['cant'],
			'precio' => $param['precio'],
			'idproveedor' => $param['prov'],
      );
    
    $camposEgre = array(
      'idproducto' => $param['id'],
      'cantidadegresada' => $param['canteg']
      );

      $this->db->insert('productosegresados',$camposEgre);

      $this->db->set($campos, FALSE);
      $this->db->where('id', $param['id']);
      $this->db->update('productos');	
        
    }//metodo para actualizar producto en base de datos con los datos extraidos en  el controlador
     //y usando funciones del codeigniter para especificar condicion

}

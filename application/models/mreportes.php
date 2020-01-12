<?php

class Mreportes extends CI_Model
{

    function fetch()
    {
    $this->db->select("p.id, p.nombreprod, c.nombrecat, p.cantidad, 
                       p.precio, prov.nombre as nombreprov", false); 
    $this->db->from('productos p');      
    $this->db->join('proveedores prov','p.idproveedor = prov.id');
    $this->db->join('categorias c','p.idcategoria = c.id');
    $data = $this->db->get();
    
    $output = '<table width="100%" cellspacing="5" cellpadding="5">';

    foreach($data->result() as $row)
    {
    $output .= '
    <tr>
        <td><b>Fecha : </b>'.$row->nombreprod.'</td>
        <td><b>Series : </b>'.$row->cantidad.'</td>
        <td><b>Tiempo : </b>'.$row->precio.'</td>
        <td><b>Entrenador : </b>'.$row->nombreprov.'</td>
        <td><b>Ejercicio : </b> '.$row->nombrecat.' </td>
    </tr>
    ';
    }

    $output .= '</table>';

    return $output;
    }

}

?>
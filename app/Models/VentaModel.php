<?php
namespace App\Models;
use CodeIgniter\Model;

class VentaModel extends Model 
{
	protected $table1 = 'Venta';
    protected $table2 = 'DetalleVenta';

	public function createVenta ($datos)
	{
		$tb_venta = $this->db->table ('Venta');
		$tb_venta->insert($datos);
		return $this->db->insertID ();
	}//Fin de create

    public function createDetalleVenta ($datos)
	{
		$tb_det_venta = $this->db->table ('DetalleVenta');
		$tb_det_venta->insert($datos);
		return $this->db->insertID ();
	}//Fin de create

    public function mostrarVentas() 
	{
		$venta = $this->db->table('DetalleVenta');
		$venta->select('*');
		$venta->join('Venta', 'Venta.id_venta = DetalleVenta.FK_id_venta', 'inner');
        $venta->join('Cliente', 'Cliente.id_cliente = Venta.FK_id_cliente', 'inner');
		return $venta->get()->getResultArray();
	}	
	
}//Fin de la clase
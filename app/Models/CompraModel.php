<?php
namespace App\Models;
use CodeIgniter\Model;

class CompraModel extends Model 
{
	protected $table1 = 'Compra';
    protected $table2 = 'DetalleCompra';

	public function createCompra ($datos)
	{
		$tb_compra= $this->db->table ('Compra');
		$tb_compra->insert($datos);
		return $this->db->insertID ();
	}//Fin de create

    public function createDetalleCompra ($datos)
	{
		$tb_det_compra= $this->db->table ('DetalleCompra');
		$tb_det_compra->insert($datos);
		return $this->db->insertID ();
	}//Fin de create

    public function mostrarCompras() 
	{
		$compra = $this->db->table('DetalleCompra');
		$compra->select('*');
		$compra->join('Compra', 'Compra.id_compra = DetalleCompra.FK_id_compra', 'inner');
        $compra->join('Proveedor', 'Proveedor.id_proveedor = Compra.FK_id_proveedor', 'inner');
		return $compra->get()->getResultArray();
	}	
	
}//Fin de la clase
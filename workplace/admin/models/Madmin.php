<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Madmin extends CI_Model {

	public function store($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function patch($table, $data, $where, $id)
	{
		$this->db->where($where, $id);
		return $this->db->update($table, $data);
	}

	public function destroy($table, $where, $id)
	{
		return $this->db->delete($table, array($where => $id));
	}

	public function all($table)
	{
		return $this->db->get($table);
	}

	public function get_by($table, $where, $value)
	{
		$this->db->where($where, $value);
		return $this->db->get($table);
	}

	public function get_by_order($table, $where, $value)
	{
		$this->db->where($where, $value);
		$this->db->order_by('id','desc');
		return $this->db->get($table);
	}

	public function get_by_sort($table, $orderby, $sort = 'desc'){
		$this->db->order_by($orderby,$sort);
		return $this->db->get($table);
	}

	public function get_web_setting($key)
	{
		$this->db->where('key', $key);
		$result = $this->db->get('web_setting')->result()[0]->value;

		return json_decode($result);
	}

	public function web_setting_store($key, $value)
	{
		$data = array('value' => $value);
		$this->db->where('key', $key);
		return $this->db->update('web_setting', $data);
	}

	public function get_surat_setting($key)
	{
		$this->db->where('key', $key);
		$result = $this->db->get('web_setting')->result()[0]->value;

		return json_decode($result);
	}

	public function surat_setting_store($key, $value)
	{
		$data = array('value' => $value);
		$this->db->where('key', $key);
		return $this->db->update('surat_setting', $data);
	}

	public function get_peminjaman_status($status, $identic = TRUE)
	{
		$this->db->from('peminjaman_alat_bahan AS p');
		$this->db->select("p.*, (CASE WHEN p.type_barang = 'alat' THEN a.nama_alat ELSE b.nama_bahan END) AS nama_barang");
		$this->db->join("alat AS a", "a.id_alat = p.id_barang", 'left');
		$this->db->join("bahan AS b", "b.id_bahan = p.id_barang", 'left');
		if ($identic) :
			$this->db->where('status', $status);
		else :
			$this->db->where('status !=', $status);
		endif;
		return $this->db->get();
	}

	public function get_peminjam_id($id)
	{
		$this->db->where('status', 'pending');
		$this->db->where('id_barang', $id);
		return $this->db->get('peminjaman_alat_bahan');
	}

	public function get_barang($table, $where, $id)
	{
		$this->db->select("*, nama_$table as nama_barang, kondisi_$table as kondisi_barang, jumlah_$table as jumlah_barang, satuan_$table as satuan_barang, foto_$table as foto_barang");
		$this->db->where($where, $id);
		return $this->db->get($table);
	}

	public function get_jumlah_peminjam($id)
	{
		$this->db->select("sum(jumlah) as jumlah_peminjam");
		$this->db->where('id_barang', $id);
		$this->db->where('status', 'active');
		$jumlah = $this->db->get('peminjaman_alat_bahan')->result();
		return $jumlah ? (int) $jumlah[0]->jumlah_peminjam : 0;
	}

	public function get_upinjam_status($id, $status)
	{
		$this->db->where('id_barang', $id);
		$this->db->where('status', $status);
		return $this->db->get('peminjaman_alat_bahan');
	}

	public function get_user($id)
	{
		$this->db->where('id_user', $id);
		$result = $this->db->get('user')->result();
		return $result ? $result[0] : FALSE;
	}
	public function getAlatWithSisa()
	{
		$this->db->select("*, (jumlah_alat - (SELECT SUM(jumlah) FROM peminjaman_alat_bahan WHERE id_barang = id_alat AND STATUS = 'active')) AS tersedia");
		return $this->db->get('alat');
	}
	public function getBahanWithSisa()
	{
		$this->db->select("*, (jumlah_bahan - (SELECT SUM(jumlah) FROM peminjaman_alat_bahan WHERE id_barang = id_bahan AND STATUS = 'active')) AS tersedia");
		return $this->db->get('bahan');
	}
	public function stockalat(){
		$this->db->select("id_alat,tanggal,nama_alat,merk_alat,jumlah_alat as stokawal,satuan_alat,masuk,keluar from alat as a LEFT JOIN 
		(SELECT barang_id, SUM(increase) as masuk , SUM(decrease) as keluar,created_at as tanggal FROM stock GROUP BY barang_id) AS b on a.id_alat =b.barang_id");
		return $this->db->get();
	}
	public function stockbahan(){
		$this->db->select("id_bahan,nama_bahan,jumlah_bahan as stokawal,satuan_bahan,masuk,keluar from bahan as a LEFT JOIN 
		(SELECT barang_id, SUM(increase) as masuk , SUM(decrease) as keluar FROM stock GROUP BY barang_id) AS b on a.id_bahan =b.barang_id");
		return $this->db->get();
	}
	public function lap_trans(){
		$this->db->select("id_peminjaman,id_barang,type,jumlah,remain,description,status,trx_id as trx_id,created_at FROM peminjaman_alat_bahan as a LEFT JOIN
		(SELECT barang_id,remain,description as description,type as type, trx_id as trx_id, created_at as created_at FROM stock ) as b on b.description = a.id_peminjaman 
		");
		return $this->db->get();

		}
		public function get_peminjaman(){
			return $this->db->get('peminjaman_alat_bahan');
		}
		function qw($cel,$table,$prop,$where){
			return $this->db->query("SELECT $cel FROM $table $prop $where");
		}
		function qwe($cel,$table,$prop	){
			return $this->db->query("SELECT $cel FROM $table $prop ");
		}
	
	public function get_pdf($id)
	{
		$this->db->from('surat_bebas AS s');
		$this->db->where('s.id', $id);

		$result =  $this->db->get()->result();
		return $result ? $result[0] : FALSE;
	}

	public function get_nim($n)
	{
		$this->db->where('status', 'pending');
		$this->db->where('nim_nip', $n);
		$result = $this->db->get('peminjaman_alat_bahan')->result();
		return $result;
	}


	public function get_surat_peminjaman($key)
	{
		$this->db->where('key', $key);
		$result = $this->db->get('surat_peminjaman')->result()[0]->value;

		return json_decode($result);
	}
	public function peminjaman_store($key, $value)
	{
		$data = array('value' => $value);
		$this->db->where('key', $key);
		return $this->db->update('surat_peminjaman', $data);
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mfrontend extends CI_Model {

	public function all($table)
	{
		return $this->db->get($table);
	}

	public function checkout($table, $id){
		return $this->db->get_where($table, array('id_guest'=>$id));
	}

	public function store($table, $data)
	{
		return $this->db->insert($table, $data);
	}

	public function get_search($table, $set_limit = TRUE, $limit, $offset, $type, $keywords = FALSE)
	{
		$this->db->select("*, id_$type as id, nama_$type as nama, lokasi_$type as lokasi, kondisi_$type as kondisi");
		if ($keywords != FALSE) $this->db->like("nama_$type", $keywords);
		if ($set_limit) $this->db->limit($limit, $offset);
		return $this->db->get($table);
	}

	public function get_where($table, $where, $value)
	{
		$this->db->select("*, id_$table as id, nama_$table as nama, lokasi_$table as lokasi, kondisi_$table as kondisi, foto_$table as foto");
		$this->db->where($where, $value);
		return $this->db->get($table);
	}

	public function get_jadwal($limit, $offset, $set_limit = FALSE)
	{
		if ($set_limit) $this->db->limit($limit, $offset);
		return $this->db->get('jadwal_kegiatan');
	}

	public function get_web_setting($key)
	{
		$this->db->where('key', $key);
		$result = $this->db->get('web_setting')->result()[0]->value;

		return json_decode($result);
	}

	public function get_upinjam_status($id, $status)
	{
		$this->db->where('id_barang', $id);
		$this->db->where('status', $status);
		return $this->db->get('peminjaman_alat_bahan');
	}

	public function get_pdf($id)
	{
		$this->db->select("p.*, (CASE WHEN p.type_barang = 'alat' THEN a.nama_alat ELSE b.nama_bahan END) AS nama_barang");
		$this->db->from('peminjaman_alat_bahan AS p');
		$this->db->join("alat AS a", "a.id_alat = p.id_barang", 'left');
		$this->db->join("bahan AS b", "b.id_bahan = p.id_barang", 'left');
		$this->db->where(array('id_guest' => $id));
		$this->db->where('p.status', 'pending');

		$result =  $this->db->get()->result();
		return $result ? $result[0] : FALSE;
	}

		public function get_peminjaman($key)
	{
		$this->db->where('key', $key);
		$result = $this->db->get('surat_peminjaman')->result()[0]->value;

		return json_decode($result);
	}

	public function data_cart(){
      $this->db->select('*');
      $this->db->from('peminjaman_alat_bahan AS b');
	  $this->db->join("cart AS a", "a.id_cart = b.id_barang", 'left');
      $query = $this->db->get();
      return $query;
   }

	function get_by($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	
	public function update($data, $id){
		// $this->db->set($data);
		// print_r($id);
		$this->db->where('id_guest', $id);
		return $this->db->get('peminjaman_alat_bahan')->result();
		// $this->db->update('peminjaman_alat_bahan', $data);
		// $this->db->update('peminjaman_alat_bahan', $data, ['id_guest' => $id]);
	}

	public function get_peminjaman_status($id)
	{
		$this->db->from('peminjaman_alat_bahan AS p');
		$this->db->select("p.*, (CASE WHEN p.type_barang = 'alat' THEN a.nama_alat ELSE b.nama_bahan END) AS nama_barang");
		$this->db->join("alat AS a", "a.id_alat = p.id_barang", 'left');
		$this->db->join("bahan AS b", "b.id_bahan = p.id_barang", 'left');
		$this->db->where( array('id_guest'=>$id));
		return $this->db->get();
	}

	public function delete($where, $table)
    {
		$this->db->where($where);
		$this->db->delete($table);
		return $this->db->get($table);
    }
}

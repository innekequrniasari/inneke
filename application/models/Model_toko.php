<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_toko extends CI_Model {
	var $table = 'merchants';

	public function simpan_data_toko($data) {
		return $this->db->insert($this->table, $data);
	}
	
	public function find_store() {
		$this->db->select('*');
		return $this->db->get($this->table)->row();
	}
	
	public function update_data_toko($data, $id) {
		$this->db->where('id_toko',$id);
		return $this->db->update($this->table, $data);
	}
}

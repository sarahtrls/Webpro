<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GroomingModel extends CI_Model {
    private $table = "grooming";

    public function findOne($col, $val)
    {
        return $this->db->get_where($this->table, [$col => $val])->row();
    }

    public function findAll()
    {
        return $this->db->query("SELECT u.*, p.* FROM grooming p INNER JOIN user u WHERE p.id_user=u.id ORDER BY tanggal DESC")->result();
    }

    public function findAllByUser($id)
    {
        return $this->db->query("SELECT * FROM grooming WHERE id_user='$id' ORDER BY tanggal DESC")->result();
    }

    public function create($data)
    {
        return $this->db->insert($this->table, $data);
    }
    
    public function update($data, $id)
    {
        return $this->db->update($table, $data, array('id' => $id));
    }
    public function delete($id)
    {
        return $this->db->delete($this->table, array('id_grooming' => $id));
    }
}
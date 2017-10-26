<?php

class Mwilayah extends CI_Model {

    var $tabel = 'r_wilayah'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

    function get_allwilayah() {
        $this->db->from($this->tabel);
        $query = $this->db->get(); //cek apakah ada ba 
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }
    function get_wilayah_byid($id) {
        $this->db->from($this->tabel);
        $this->db->where('kode_wilayah', $id);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        }
    }
    function get_insert($data){
       $this->db->insert($this->tabel, $data);
       return TRUE;
    }
 
    function get_update($id,$data) {
 
        $this->db->where('kode_wilayah', $id);
        $this->db->update($this->tabel, $data);
 
        return TRUE;
    }
    function del_wilayah($id) {
        $this->db->where('kode_wilayah', $id);
        $this->db->delete($this->tabel);
        if ($this->db->affected_rows() == 1) {
 
            return TRUE;
        }
        return FALSE;
    }
}
?>
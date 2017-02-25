<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Model {

    public function getSymptoms() {
        $this->load->database('sqlite3');

        $sql = "SELECT s.id, s.name, s.desc, s.category FROM symptoms s,categories c WHERE s.category = c.name ORDER BY c.id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getCategories() {
        $this->load->database('sqlite3');

        $sql = "SELECT name FROM categories ORDER BY id";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function getDiseases() {
        $this->load->database('sqlite3');

        $sql = "SELECT name, desc, symptoms FROM diseases";
        $query = $this->db->query($sql);
        return $query->result();
    }



}

/* End of file Data.php */
/* Location: ./application/models/Data.php */

<?php

class Mytable extends CI_Model{
    
    private $table = 'mytable';
    public function __construct()

    {
        $this->load->database();
    }

    public function get_items()
    {
        return $this->db->get($this->table)->result();
    }
   
    public function create_item($value)
    {
        $this->db->insert($this->table, $value);
    }
}
<?php
class Model_produkt extends CI_Model {

    public function getItems()
    {                 
        $this->db->select("*");
        $this->db->from("produkty");       
        $this->db->order_by('ID_PRODUKT', 'ASC');
        return $this->db->get()->result_array();
        
    }
    
   
}
<?php
class Model_produkt extends CI_Model {

    public function getItems()
    {                 
        $this->db->select("*");
        $this->db->from("produkty");       
        $this->db->order_by('ID_PRODUKT', 'ASC');
        return $this->db->get()->result_array();
        
    }
    
    public function addProdukt($data)
    {
        $this->db->insert('produkty',$data);
    }

    function updateProdukt($id,$params)
    {
        $this->db->where('ID_PRODUKT',$id);
        $this->db->update('produkty',$data);
    }

    function removeProdukt($id)
    {
        return $this->db->delete('produkty',array('ID_PRODUKT'=>$id));
    }
    
   
}
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

    public function removeProdukt($id)
    {
        $this->db->where('ID_PRODUKT',$id); // zmien
        $this->db->update('produkty_zamowienia',array('ID_PRODUKT'=>NULL)); // zmien
        
        $this->db->delete('produkty',array('ID_PRODUKT'=>$id));
    }
    
    public function getProdukt($id)
    {
        return $this->db->get_where('produkty',array('ID_PRODUKT'=>$id))->row_array();
    }
    
    public function updateProdukt($id, $data)
    {
        $this->db->where('ID_PRODUKT',$id);
        $this->db->update('produkty',$data);
    }
    
  
    
    

   
}
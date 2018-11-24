<?php
class Model_klient extends CI_Model {

    public function getKlient()
    {                 
        $this->db->select("ID_KLIENT,IMIE,ADRES,TELEFON");
        $this->db->from("klienci");       
        $this->db->order_by('ID_KLIENT', 'ASC');
        return $this->db->get()->result_array();
        
    }
    
   
    public function removeKlient($id)
    {
        $this->db->delete('klienci',array('ID_KLIENT'=>$id));
    }
    
  


   
}
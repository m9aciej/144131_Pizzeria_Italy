<?php
class Model_zamowienia extends CI_Model {

    public function addOrder($data)
    {                 
        $this->db->insert('zamowienia',$data);
        return $this->db->insert_id();       
    }
    
    public function addOrderToProdukty_Zamowienia($data)
    {                 
        $this->db->insert('produkty_zamowienia',$data);
    }
    
    public function removeOrder($id)
    {                 
        $this->db->delete('zamowienia',array('ID_ZAMOWIENIA'=>$id));
    }
    
    public function selectAllClientOrder($id)
    {                 
        //$this->db->delete('zamowienia',array('ID_ZAMOWIENIA'=>$id));
        $sql = "SELECT zamowienia.DATA, SUM(produkty_zamowienia.ILOSC*produkty.CENA) AS KOSZT_CALKOWITY, zamowienia.STAN FROM produkty INNER JOIN produkty_zamowienia ON produkty.ID_PRODUKT=produkty_zamowienia.ID_PRODUKT INNER JOIN zamowienia ON produkty_zamowienia.ID_ZAMOWIENIA=zamowienia.ID_ZAMOWIENIA WHERE zamowienia.ID_KLIENT = ? GROUP BY produkty_zamowienia.ID_ZAMOWIENIA DESC";
        return $this->db->query($sql,array($id))->result_array();
        
        //return $this->db->get()->result_array(); "For custom query in Codeigniter you cannot use get method after."-rozwiązanie   
    }
    
    
   

}
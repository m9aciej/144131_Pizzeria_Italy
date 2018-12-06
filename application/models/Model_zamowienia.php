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
//rozwiązanie dorazne
        $this->db->delete('produkty_zamowienia',array('ID_ZAMOWIENIA'=>$id));
        $this->db->delete('zamowienia',array('ID_ZAMOWIENIA'=>$id));
    }
    
    public function updateOrderState($id,$data)
    {          
        $this->db->where('ID_ZAMOWIENIA',$id);
        $this->db->update('zamowienia',array('STAN' => $data));
    }
 
    
    
    public function selectAllClientOrder($id)
    {                 
        //$this->db->delete('zamowienia',array('ID_ZAMOWIENIA'=>$id));
        $sql = "SELECT zamowienia.ID_ZAMOWIENIA, zamowienia.DATA, SUM(produkty_zamowienia.ILOSC*produkty.CENA) AS KOSZT_CALKOWITY, zamowienia.STAN FROM produkty INNER JOIN produkty_zamowienia ON produkty.ID_PRODUKT=produkty_zamowienia.ID_PRODUKT INNER JOIN zamowienia ON produkty_zamowienia.ID_ZAMOWIENIA=zamowienia.ID_ZAMOWIENIA WHERE zamowienia.ID_KLIENT = ? GROUP BY produkty_zamowienia.ID_ZAMOWIENIA DESC";
        return $this->db->query($sql,array($id))->result_array();
        
        //return $this->db->get()->result_array(); "For custom query in Codeigniter you cannot use get method after."-rozwiązanie   
    }
    
    public function selectAllOrder()
    {                 
       //$this->db->delete('zamowienia',array('ID_ZAMOWIENIA'=>$id));
       $sql = "SELECT zamowienia.ID_ZAMOWIENIA, zamowienia.DATA, klienci.TELEFON, klienci.ADRES, SUM(produkty_zamowienia.ILOSC*produkty.CENA) AS KOSZT_CALKOWITY, zamowienia.STAN FROM produkty INNER JOIN produkty_zamowienia ON produkty.ID_PRODUKT=produkty_zamowienia.ID_PRODUKT INNER JOIN zamowienia ON produkty_zamowienia.ID_ZAMOWIENIA=zamowienia.ID_ZAMOWIENIA INNER JOIN klienci ON zamowienia.ID_KLIENT = klienci.ID_KLIENT GROUP BY produkty_zamowienia.ID_ZAMOWIENIA DESC";
       return $this->db->query($sql)->result_array();
    
       //return $this->db->get()->result_array(); "For custom query in Codeigniter you cannot use get method after."-rozwiązanie   
    }
    
    public function previewOrder($idOrder){
        
        $sql = "SELECT produkty.NAZWA, produkty.OPIS, produkty_zamowienia.ILOSC FROM produkty INNER JOIN produkty_zamowienia ON produkty.ID_PRODUKT=produkty_zamowienia.ID_PRODUKT  WHERE produkty_zamowienia.ID_ZAMOWIENIA = ?";
        return $this->db->query($sql,array($idOrder))->result_array();
    }
    
   

}
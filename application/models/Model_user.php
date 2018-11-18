<?php
class Model_user extends CI_Model {
    public function insertUser () {
        //insert data
        $data = array(
            //assign data into array elements           
            'IMIE' => $this->input->post('Imie'),
            'ADRES' => $this->input->post('Adres'),
            'TELEFON' =>$this->input->post('Telefon'),
            'HASŁO' => $this->input->post('Hasło'),
            
        );
        //insert data to the database
        $this->db->insert('klienci',$data);
    }
    public function checkLoginUser($Telefon, $Hasło, $Typ) {
        
        if($Typ == "Klient"){      
        $this->db->select("*");
        $this->db->from("klienci");
        $this->db->where(array('TELEFON' => $Telefon , 'HASŁO' => $Hasło));
        $query = $this->db->get();
        $user = $query->row();
        
        return $user;
        }
        
        if($Typ == "Admin"){      
        $this->db->select("*");
        $this->db->from("administrator");
        $this->db->where(array('TELEFON' => $Telefon , 'HASŁO' => $Hasło));
        $query = $this->db->get();
        $user = $query->row();
        
        return $user;
        } 
        
        return FALSE;
    }  
   
    
    function get_uzytkownik_by_telefon($telefon)
    {
        return $this->db->get_where('klienci',array('TELEFON'=>$telefon))->row_array();
    }
    
}
?>
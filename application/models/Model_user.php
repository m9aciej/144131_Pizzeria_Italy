<?php
class Model_user extends CI_Model {
    public function insertUser () {
        //insert data
        $this->load->helper('security'); 
        $password = do_hash($this->input->post('Hasło'), 'md5'); //hashowanie hasla
        $data = array(
            //assign data into array elements           
            'IMIE' => $this->input->post('Imie'),
            'ADRES' => $this->input->post('Adres'),
            'TELEFON' =>$this->input->post('Telefon'),        
            'HASŁO' => $password
            
        );
        //insert data to the database
        $this->db->insert('klienci',$data);
    }
    public function checkLoginUser($Telefon, $Haslo, $Typ) {
        
        $this->load->helper('security');
        $password = do_hash($Haslo, 'md5');
        
        if($Typ == "Klient"){      
        $this->db->select("*");
        $this->db->from("klienci");
        $this->db->where(array('TELEFON' => $Telefon , 'HASŁO' => $password));
        $query = $this->db->get();
        $user = $query->row();
        
        return $user;
        }
        
        if($Typ == "Admin"){      
        $this->db->select("*");
        $this->db->from("administrator");
        $this->db->where(array('TELEFON' => $Telefon , 'HASŁO' => $Haslo));
        $query = $this->db->get();
        $user = $query->row();
        
        return $user;
        } 
        
        return FALSE;
    }  
   
    
    public function get_klient_id_by_telefon($Telefon)
    {
        $this->db->select("ID_KLIENT");
        $this->db->from("klienci");
        $this->db->where(array('TELEFON' => $Telefon));
        $query = $this->db->get();
        return $query->row();
    }
    
}
?>
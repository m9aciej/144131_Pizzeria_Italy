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
    public function checkLoginUser() {
        //enter username and password
        $username = $this->input->post('Telefon',TRUE);
        $password = $this->input->post('Hasło',TRUE);
        //fetch data from database
        $this->db->where('TELEFON',$username);
        $this->db->where('HASŁO',$password);
        $res = $this->db->get('klienci');
             
        //check if there's a user with the above inputs
        if ($res->num_rows() == 1) {
            //retrieve the details of the user
            return $res->result();
        } 
        
        else {
            return false;
        }
    }  
    public function checkLoginAdmin() {
        //enter username and password
        $username = $this->input->post('Telefon',TRUE);
        $password = $this->input->post('Hasło',TRUE);
        //fetch data from database
        $this->db->where('TELEFON',$username);
        $this->db->where('HASŁO',$password);
        $res = $this->db->get('administrator');
             
        //check if there's a user with the above inputs
        if ($res->num_rows() == 1) {
            //retrieve the details of the user
            return $res->result();
        } 
        
        else {
            return false;
        }
    }
    
    function get_uzytkownik_by_telefon($telefon)
    {
        return $this->db->get_where('klienci',array('TELEFON'=>$telefon))->row_array();
    }
    
}
?>
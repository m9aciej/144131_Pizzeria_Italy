<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
    
    public function registerUser() {
        
       if(czyAdmin()||czyKlient())
        {
            redirect('dashboard');
        }
        //validate  the data taken through the register form
        //$this->form_validation->set_rules('username','Username','required|is_unique[users.username]');       
       // $this->form_validation->set_rules('contact','contact','required');
       // $this->form_validation->set_rules('nic','NIC','required');
        $this->form_validation->set_rules('Imie','Imie','required');
        $this->form_validation->set_rules('Telefon','Telefon','numeric|required|is_unique[klienci.TELEFON]');  
        $this->form_validation->set_rules('Hasło','Hasło','required');
        $this->form_validation->set_rules('Adres','Adres','required');
        
        if ($this->form_validation->run() == TRUE) {
        //load the model to connect to the db
        
        $this->load->model('Model_user');
        $this->Model_user->insertUser();
        //set message to be shown when registration is completed
        $this->session->set_flashdata('success','Udało Ci się zarejestrować!');
        redirect('Register/registerUser');
            
    } else {
        $data['_view'] = 'dashboard';
        $this->load->view('layouts/register_view',$data);
        }
    }
}
?>
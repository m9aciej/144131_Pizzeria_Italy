<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function loginUser() {
        $this->form_validation->set_rules('Telefon','Telefon','required');
        $this->form_validation->set_rules('Hasło','Hasło','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts\login_view');
        } 
        else {
            
           $Telefon = $_POST['Telefon'];
           $Hasło = $_POST['Hasło'];
            
           $this->db->select("*");
           $this->db->from("klienci");
           $this->db->where(array('TELEFON' => $Telefon , 'HASŁO' => $Hasło));
           $query = $this->db->get();
           $user = $query->row();
           
           if ($user->TELEFON) {
                    //login message
                    $this->session->set_flashdata("success","You are logged in");
                    //set session variables
                    $_SESSION['user_logged'] = TRUE;
                    $_SESSION['phone'] = $user->TELEFON;
                    $_SESSION['admin'] = FALSE;
                    //redirect
                    redirect('dashboard','refresh');
            }
            else {
                //wrong credentials
                $this->session->set_flashdata('error','Username or Password invalid!');
                redirect('Login/loginUser');
            }
            
        }
    }
    //logging out of a user
    public function logoutUser() {
		//unset($_SESSION);
        session_destroy();
		redirect('dashboard');
	}
}
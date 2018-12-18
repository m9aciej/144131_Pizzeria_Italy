<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    
    public function loginUser() {
        
        if(czyAdmin()||czyKlient())
        {
            redirect('dashboard');
        }
        
        $this->form_validation->set_rules('Telefon','Telefon','required');
        $this->form_validation->set_rules('Hasło','Hasło','required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('layouts/login_view');
        } 
        else {
                   
        $Telefon = $_POST["Telefon"]; // ' ' = " "
        $Hasło = $_POST["Hasło"];
        $Typ = $_POST["Typ"];
        

        $this->load->model('Model_user');
        $uzytkownik = $this->Model_user->checkLoginUser($Telefon, $Hasło, $Typ);
            
                       
        if ($uzytkownik->TELEFON) {
                    //login message
                    $this->session->set_flashdata("success","Udało Ci się zalogować");
                    //set session variables
                    //$_SESSION['user_logged'] = TRUE;
                    $_SESSION['phone'] = $uzytkownik->TELEFON;
                    $_SESSION['typ'] = $Typ;
                    //redirect
                    redirect('dashboard','refresh');
         }
         else {
                //wrong credentials
                $this->session->set_flashdata('error','Telefon lub hasło jest błędne!');
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
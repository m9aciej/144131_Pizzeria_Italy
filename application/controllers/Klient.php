
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Klient extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_klient');

    }

    public function index()
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }
        
        
        $data['klienci'] = $this->Model_klient->getKlient();
 
           
        $data['_view'] = 'klienci/klienci_view';
        $this->load->view('layouts/main',$data);
        
    }
   
    public function remove($id)
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }
        $this->Model_klient->removeKlient($id);
        redirect('klient/index');
    }
    
    
}
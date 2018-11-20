
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produkt extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_produkt');

    }

    public function index()
    {
        if(czyKlient())
        {
            return FALSE;
        }

        if(czyAdmin())
        {
            return FALSE;
        }
        
        if(!czyAdmin() && !czyKlient())
        {
            return $this->menuNiezalogowany();
        }
        
    }

    public function menuNiezalogowany()
    {
        if(czyAdmin() || czyKlient())
        {
            redirect('dashboard'); // return to dashboard 
        }
        
        //echo "ddd";
        $this->load->model('Model_produkt');
        $data['produkty'] = $this->Model_produkt->getItems();
 
           
        $data['_view'] = 'produkty/menuNiezalogowany_view';
        $this->load->view('layouts/main',$data);
    }
    
    
}
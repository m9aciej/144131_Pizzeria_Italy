
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
            return $this->menuAdministrator();
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
    
    public function menuAdministrator()
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }
        
        //echo "ddd";
        $this->load->model('Model_produkt');
        $data['produkty'] = $this->Model_produkt->getItems();
 
           
        $data['_view'] = 'produkty/menuAdministrator_view';
        $this->load->view('layouts/main',$data);
    }
    
    public function add()
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }
        
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nazwa','Nazwa','required|max_length[255]');
		$this->form_validation->set_rules('skladniki','Skladniki','required|max_length[255]|is_unique[produkty.OPIS]');
		$this->form_validation->set_rules('cena','Cena','numeric|required|max_length[255]');
		
		if($this->form_validation->run())     
        {   
            $data = array(
                
            'NAZWA' => $this->input->post('nazwa'),
            'OPIS' => $this->input->post('skladniki'),
            'CENA' =>$this->input->post('cena'),
            
        );
            
            $this->Model_produkt->addProdukt($data);
            redirect('produkt/index');
        }
        else
        {            
            $data['_view'] = 'produkty/dodajProdukt_view';
            $this->load->view('layouts/main',$data);
        }
		      
        
    }
    
    public function edit()
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }
        
    }
    
    public function remove($id)
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }
        $this->Model_produkt->removeProdukt($id);
        redirect('produkt/index');
    }
    
    
}
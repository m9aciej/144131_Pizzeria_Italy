
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Zamowienia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_zamowienia');

    }

    public function index()
    {
      
        if(czyKlient())
        {
            return $this->zamowieniaKlient();
        }

        if(czyAdmin())
        {
            return $this->zamowieniaAdmin();
        }
        
        if(!czyAdmin() && !czyKlient())
        {
            redirect('dashboard'); // return to dashboard 
        }
               
    }
   
    public function zamowieniaKlient()
    {
        if(!czyKlient())
        {
            redirect('dashboard');
        }
        $this->load->model('Model_user'); 
        $idKlient = $this->Model_user->get_klient_id_by_telefon(TelefonKlient()); 
        
        $data['zamowienia'] = $this->Model_zamowienia->selectAllClientOrder($idKlient->ID_KLIENT);
        $data['_view'] = 'zamowienia/klientZamowienie_view';
        $this->load->view('layouts/main',$data);
    }
    
    public function zamowieniaAdmin()
    {
        if(!czyAdmin())
        {
            redirect('dashboard');
        }
              
        $data['zamowienia'] = $this->Model_zamowienia->selectAllOrder();
        $data['_view'] = 'zamowienia/adminZamowienie_view';
        $this->load->view('layouts/main',$data);
        //$data['_view'] = 'klienci/klienci_view';
        //$this->load->view('layouts/main',$data);
    }
    
    public function podglad($id)
    {
        if(!czyAdmin() && !czyKlient())
        {
            redirect('dashboard'); // return to dashboard 
        }
        $this->load->model('Model_zamowienia');
        $data['podglad'] = $this->Model_zamowienia->previewOrder($id);
        $data['_view'] = 'zamowienia/podgladZamowienie_view';
        $this->load->view('layouts/main',$data);
    }
    
         
        
    public function aktualizacjaStanuZamowienia($id,$data){
        
        $this->load->model('Model_zamowienia');
        
        $this->Model_zamowienia->updateOrderState($id,$data);

        redirect('zamowienia');
        
    }
    
    
    public function remove($idZamowienia)
    {
        if(!czyAdmin())
        {
            redirect('dashboard'); // return to dashboard 
        }  
        $this->load->model('Model_zamowienia');
        $this->Model_zamowienia->removeOrder($idZamowienia);
        redirect('zamowienia');
        
        
       // $this->Model_klient->removeKlient($id);
       // redirect('klient/index');
    }
    
    
}
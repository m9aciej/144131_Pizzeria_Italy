
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
            return $this->zamowieniaKlient();
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
        //$data['_view'] = 'klienci/klienci_view';
        //$this->load->view('layouts/main',$data);
    }
    
    public function remove($id)
    {
        //if(!czyAdmin())
        //{
        //    redirect('dashboard'); // return to dashboard 
       // }
       // $this->Model_klient->removeKlient($id);
       // redirect('klient/index');
    }
    
    
}
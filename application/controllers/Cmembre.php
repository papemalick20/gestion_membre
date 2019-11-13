<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmembre extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_membre');
       
    }

	
    //public function index()
    //{
		//$this->load->view('vmembre');
    //}
    
    public function membre(){
        $data['result'] = $this->m_membre->getAllData();
        $this->load->view('vmembre',$data);
       
    }

public function create(){
    $this->m_membre->createData();
    redirect("Cmembre/membre");
}
public function edit($id){
    $data['row'] = $this->m_membre->getData($id);
    $this->load->view('modifier' ,$data);
}
//modification des données
public function update($id){
    $this->m_membre->updateData($id);
    redirect("Cmembre/membre");

}
//supression d'une logne
public function delete($id){
    $this->m_membre->deleteData($id);
    redirect("Cmembre/membre");
}

}
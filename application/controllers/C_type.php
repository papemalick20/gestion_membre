<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_type extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_type');
       
    }

	
    public function affiche()
    {
        $data['result'] = $this->m_type->getAllData();
		$this->load->view('affichetype',$data);
    }
    
    public function typee(){
     
        $this->load->view('v_type');
       
    }

public function create(){
    $this->m_type->createData();
    redirect("C_type/affiche");
    }
     public function edit($id){
    $data['row'] = $this->m_type->getData($id);
    $this->load->view('modifiertype' ,$data);
    }
    public function update($id){
    $this->m_type->updateData($id);
    redirect("C_type/affiche");

    }
    public function delete($id){
        $this->m_type->deleteData($id);
        redirect("C_type/affiche");
    }
}



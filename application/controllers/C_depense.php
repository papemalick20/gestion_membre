<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class C_depense extends CI_Controller{
    public function __construct(){
       parent::__construct();
       $this->load->model('m_depense');
    }
    // la fonction depen charge une vue applée v_depense et l'affiche à l'ecran
    public function depen(){
        $this->load->view('v_depense');
    }

    public function create(){
        $this->m_depense->createDate();
        redirect("C_depense/affiche");
    }

    public function affiche(){
        $data['result']=$this->m_depense->getAllData();
        $this->load->view('affichedepense', $data);
    }

    public function edit($id){
        $data['row']=$this->m_depense->getData($id);
        $this->load->view('modifierdepense' ,$data);

    }
    public function update($id){
        $this->m_depense->updateData($id);
        redirect("C_depense/affiche");

    }
    public function delete($id){
        $this->m_depense->deleteData($id);
        redirect("C_depense/affiche");
    }

}
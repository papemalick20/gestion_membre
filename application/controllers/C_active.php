<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_active extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('m_active');
       
    }
    public function active(){
    
        $getTypes =$this->m_active->getTypes();
    //print_r($getTypes);
    //exit();
        $this->load->model('m_active');
        $this->load->view('v_active',['getTypes'=>$getTypes]);

    }
    //pour afficher les données inserées dans la base de données

    public function affiche()
    {
        $data['result'] = $this->m_active->getAllData();
       // $type=$this->input->post('id_type');
        //$getTypes=$this->m_active->getTypes();
        $this->load->view('afficheactive',$data);
        //$record=$this->m_active->affiche($type);
        
    }
    //pour recuperer les données d'une table et les mettre dans un menu deroulant
    public function getSelects(){
        $this->load->model('m_active');
        $type=$this->input->post('id_types');
        $getTypes=$this->m_active->getTypes();
        //echo $type;
        //exit();
        $record=$this->m_active->getSelects($type);
        $this->load->view('afficheactive',['getTypes'=>$getTypes, 'valider'=>$record]);        
    }
    //pour inserer dan la base de données
    public function create(){
        $this->m_active->createData();
        redirect("C_active/affiche");
        }
        //pour editer 
        public function edit($id){
            $data['row'] = $this->m_active->getData($id);
            $this->load->view('modifieractive' ,$data);
            }
            //pour modifier les données
            public function update($id){
            $this->m_active->updateData($id);
            redirect("C_active/affiche");
 }
 //pour supprimer les données
     public function delete($id){
    $this->m_active->deleteData($id);
    redirect("C_active/affiche");
}

}
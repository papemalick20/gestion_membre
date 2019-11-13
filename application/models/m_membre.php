<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_membre extends CI_Model {

    public function __construct(){
       $this->load->database();
    }
    function createData(){
        $data = array(
            'prenom'=>$this->input->post('prenom'),
            'nom'=>$this->input->post('nom'),
            'nationalite'=>$this->input->post('nationalite'),
            'datenais'=>$this->input->post('datenais'),
           ' email'=>$this->input->post('email'),
             'adresse'=>$this->input->post('adresse'), 
            'tel'=>$this->input->post('tel'),
            'filiere'=>$this->input->post('filiere'),
            'sex'=>$this->input->post('sex')
            
           
        );
        

        //var_dump($data);
        //exit();
        $this->db->insert('membre1',$data);
       
    }
    function getAllData(){
        $query = $this->db->query('SELECT * FROM membre1');
        return $query->result();
    }
    function getData($id){
        $query= $this->db->query('SELECT * FROM membre1 WHERE `id_membre1`='.$id);
        return $query->row();

    }
    function updateData($id){
        $data = array(
            'prenom'=>$this->input->post('prenom'),
            'nom'=>$this->input->post('nom'),
            'nationalite'=>$this->input->post('nationalite'),
            'datenais'=>$this->input->post('datenais'),
           ' email'=>$this->input->post('email'),
             'adresse'=>$this->input->post('adresse'), 
            'tel'=>$this->input->post('tel'),
            'filiere'=>$this->input->post('filiere'),
            'sex'=>$this->input->post('sex')
           
        );
        $this->db->where('id_membre1',$id);
        $this->db->update('membre1',$data);

        //$datat->save();
        //return redirect('/vmembre')->with('reussi', 'membre enregistré!');

    }
    function deleteData($id){
        $this->db->where('id_membre1',$id);
        $this->db->delete('membre1');
    }

	
	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_active extends CI_Model {

   

    public function __construct(){
       $this->load->database();
    }
    public function getTypes(){
        $query=$this->db->get('types');
        if($query->num_rows() >0){
            return $query->result();
        }
    }

    public function getSelects($type){
        $this->db->select('activite.id_activite', 'activite.libelle', 'activite.commentaire', 'activite.dates', 'activite.id_types','types.libelle', 'types.id_types as typeid');
        $this->db->from('activite');
        $this->db->join('types','types.id_types =activite.id_types' );
        $this->db->where(['types.id_types'=>$type]);
        $query= $this->db->get();
        return $query->result();


     }  
     
     
    function createData(){
        $data = array(
            'libelle'=>$this->input->post('libelle'),
            'commentaire'=>$this->input->post('commentaire'),
            'dates'=>$this->input->post('dates'),
            'id_types'=>$this->input->post('id_types')
            
            
           
        );
        

        //var_dump($data);
        //exit();
        $this->db->insert('activite',$data);
    
    }
    function getAllData(){
       
        $query = $this->db->query('SELECT * FROM activite ORDER BY id_activite DESC');
        //$query= $this->db->query('SELECT * FROM types ');
        return $query->result();


        
    }

    function getData($id){
        $query= $this->db->query('SELECT * FROM activite WHERE `id_activite`='.$id);
        return $query->row();

    }
     function updateData($id){
        $data = array(
            'libelle'=>$this->input->post('libelle'),
            'commentaire'=>$this->input->post('commentaire'),
            'dates'=>$this->input->post('dates'),
            'id_types'=>$this->input->post('id_types')
            
           
        );
        $this->db->where('id_activite',$id);
        $this->db->update('activite',$data);

    }
    function deleteData($id){
        $this->db->where('id_activite',$id);
        $this->db->delete('activite');
    }

}
    
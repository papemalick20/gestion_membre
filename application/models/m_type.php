<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_type extends CI_Model {

    public function __construct(){
       $this->load->database();
    }
    function createData(){
        $data = array(
            'libelle'=>$this->input->post('libelle'),
            
            
           
        );
        

        //var_dump($data);
        //exit();
        $this->db->insert('types',$data);
    }
    function getAllData(){
        $query = $this->db->query('SELECT * FROM types');
        return $query->result();
    }
    function getData($id){
        $query= $this->db->query('SELECT * FROM types WHERE `id_types`='.$id);
        return $query->row();

    }
    function updateData($id){
        $data = array(
            'libelle'=>$this->input->post('libelle')
            
           
        );
        $this->db->where('id_types',$id);
        $this->db->update('types',$data);

    }
    function deleteData($id){
        $this->db->where('id_types',$id);
        $this->db->delete('types');
    }
    
}
       
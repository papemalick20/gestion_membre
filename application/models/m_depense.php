<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_depense extends CI_Model{
    public function __construct(){
        $this->load->database();

    }
    function createDate(){
        $data = array(
            'libelle'=>$this->input->post('libelle'),
            'montant'=>$this->input->post('montant'),
            'dates'=>$this->input->post('dates')

        );
        $this->db->insert('depense', $data);
    }

    function getAllData(){
        $query=$this->db->query('SELECT * FROM depense');
        return $query->result();
    }
    function getData($id){
        $query = $this->db->query('SELECT * FROM depense WHERE `id_depense`='.$id);
        return $query->row();

    }
    function updateData($id){
        $data = array(
            'libelle'=>$this->input->post('libelle'),
            'montant'=>$this->input->post('montant'),
            'dates'=>$this->input->post('dates')

        );
        $this->db->where('id_depense',$id);
        $this->db->update('depense',$data);
       
    }
    function deleteData($id){
        $this->db->where('id_depense',$id);
        $this->db->delete('depense');
    }
}
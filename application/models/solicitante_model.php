<?php
    class Solicitante_model extends CI_Model{
        public function listasolicitantes(){
            $this->db->select('*');
            $this->db->from('solicitante');
             return $this->db->get();
        }
        public function agregarsolicitante($data){
            $this->db->insert('solicitante',$data);
            $this->db->from('solicitante');
             return $this->db->get();
        }
        public function eliminarsolicitante($id){
            $this->db->where('id',$id);
            $this->db->delete('solicitante');
        }
        public function recuperarsolicitante($id){
            $this->db->select('*');
            $this->db->from('solicitante');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarsolicitante($id, $data){
            $this->db->where('id',$id);
            $this->db->update('solicitante', $data);
        }
    }
?>
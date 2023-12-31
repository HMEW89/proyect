<?php
    class Usuario_model extends CI_Model{
        public function listausuarios(){
            $this->db->select('*');
            $this->db->from('usuario');
             return $this->db->get();
        }
        public function agregarusuario($data){
            $this->db->insert('usuario',$data);
            $this->db->from('usuario');
             return $this->db->get();
        }
        public function eliminarusuario($id){
            $this->db->where('id',$id);
            $this->db->delete('usuario');
        }
        public function recuperarusuario($id){
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('id',$id);
             return $this->db->get();
        }
        public function modificarusuario($id, $data){
            $this->db->where('id',$id);
            $this->db->update('usuario', $data);
        }
        
        public function generarContraseñaSegura() {
            $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789*+,.';
            $contraseña = '';
    
            while (strlen($contraseña) < 8) {
                $contraseña .= $caracteres[rand(0, strlen($caracteres) - 1)];
            }
    
        return $contraseña;
        }

        public function validar($nombreUsuario, $contrasenia){ 
            $this->db->select('*');
            $this->db->from('usuario');
            $this->db->where('nombreUsuario', $nombreUsuario);
            $this->db->where('contrasenia', $contrasenia);
            return $this->db->get();
        }

    }
?>
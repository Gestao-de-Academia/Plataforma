<?php
    class UserDAO extends Conn{
        public function __construct(){
            parent::__construct();
        }

        public function insert_user($user) {
            $query = 'INSERT INTO usuarios (nome, username, email, senha) VALUES (?, ?, ?, ?)';
    
            $stm = $this->db->prepare($query);
    
            $stm->bindValue(1, $user->get_nome());
            $stm->bindValue(2, $user->get_username());
            $stm->bindValue(3, $user->get_email());
            $stm->bindValue(4, $user->get_senha());
    
            $result = $stm->execute();
    
            $this->db = null;
    
            return $result;
        }

        public function verify_user($user){
            $query = 'select * from usuarios where username = ? and senha = ?';

            $stm = $this->db->prepare($query);

            $stm->bindValue(1,$user->get_username());
            $stm->bindValue(2,$user->get_senha());

            $stm->execute();

            $this->db=null;

            return $stm->fetchAll(PDO::FETCH_OBJ);

        }

        public function getAllUsers(){
            $query = 'select * from usuarios';
    
            $stm = $this->db->prepare($query);
    
            $stm->execute();
    
            $this->db = null;
    
            return $stm->fetchAll(PDO::FETCH_OBJ);
        }

    }
?>
<?php
    class UserDAO extends Conn{
        public function __construct(){
            parent::__construct();
        }

        public function insert_user($user){
            $query = 'insert into usuarios (nome,username,email,senha,cpf) values (?,?,?,?,?)';

            $stm = $this->db->prepare($query);

            $stm->bindValue(1,$user->get_nome());
            $stm->bindValue(2,$user->get_username());
            $stm->bindValue(3,$user->get_email());
            $stm->bindValue(4,$user->get_senha());
            $stm->bindValue(5,$user->get_cpf());

            $stm->execute();

            $this->db=null;
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

    }
?>
<?php
    class User extends Pessoa{
        public function __construct(private int $id_user=0, $nome, private string $username='', $email, private string $senha='',$cpf){
            parent::__construct();
        }

        public function get_id(){
            return $this->id_user;
        }

        public function get_username(){
            return $this->username;
        }

        public function get_senha(){
            return $this->senha;
        }
    }
?>
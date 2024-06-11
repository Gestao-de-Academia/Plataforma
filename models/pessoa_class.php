<?php
    abstract class Pessoa{
        public function __construct(protected string $nome='', protected string $email='', protected string $cpf=''){

        }

        public function get_nome(){
            return $this->nome;
        }

        public function get_email(){
            return $this->email;
        }

        public function get_cpf(){
            return $this->cpf;
        }
    }
?>
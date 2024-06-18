<?php
    class Aluno extends Pessoa{
        public function __construct(private int $id_aluno=0, $nome,$email,$cpf){
            parent::__construct($nome,$email,$cpf);
        }

        public function get_id(){
            return $this->id_aluno;
        }
    }
?>
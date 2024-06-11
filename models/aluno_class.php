<?php
    class Aluno extends Pessoa{
        public function __construct(private int $id_aluno=0){
            parent::__construct();
        }

        public function get_id(){
            return $this->id_aluno;
        }
    }
?>
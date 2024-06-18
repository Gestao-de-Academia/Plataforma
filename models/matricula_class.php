<?php
    class Matricula{
        public function __construct(private int $id_matricula = 0, private string $data_inicio = '', private string $data_final = '',
         private $aluno= null, private $plano = null){

        }

        public function get_id(){
            return $this->id_matricula;
        }

        public function get_data_inicio(){
            return $this->data_inicio;
        }

        public function get_data_final(){
            return $this->data_final;
        }

        public function get_aluno(){
            return $this->aluno;
        }

        public function get_plano(){
            return $this->plano;
        }
    }
?>
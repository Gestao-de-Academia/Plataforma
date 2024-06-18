<?php
    class Plano{
        public function __construct(private int $id_plano=0, private string $descricao ='', private string $periodo = ''){

        }

        public function get_id(){
            return $this->id_plano;
        }

        public function get_descricao(){
            return $this->descricao;
        }

        public function get_periodo(){
            return $this->periodo;
        }
    }
?>
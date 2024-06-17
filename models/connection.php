<?php

abstract class Conn{
    public function __construct(protected $db=null){
        $this->db = new PDO('mysql:host=localhost;dbname=gestao_academia;','root','');
    }
}

?>
<?php

abstract class Conn{
    public function __construct(){
        $this->db = new PDO('myslq:host=localhost;dbname=gestao_academia;','root','');
    }
}

?>
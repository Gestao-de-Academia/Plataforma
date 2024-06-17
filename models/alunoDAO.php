<?php
    class AlunoDAO extends Conn{
        public function __construct(){
            parent::__construct();
        }

        public function insert_aluno($aluno){
            $query = 'insert into alunos (nome,email,cpf) values (?,?,?)';

            $stm = $this->db->prepare($query);

            $stm->bindValue(1,$aluno->get_nome());
            $stm->bindValue(2,$aluno->get_email());
            $stm->bindValue(3,$aluno->get_cpf());

            $stm->execute();

            $this->db=null;
        }

        public function getAllAlunos(){
            $query = 'select * from alunos';

            $stm = $this->db->prepare($query);

            $stm->execute();

            $this->db=null;

            return $stm->fetchall(PDO::FECTH_OBJ);
        }
    }
?>
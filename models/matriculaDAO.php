<?php
    class MatriculaDAO extends Conn{
        public function __construct(){
            parent::__construct();
        }

        public function criar_matricula($mat){
            $query = 'insert into matriculas (data_inicio, data_final, id_aluno, id_plano) values (current_date,?,?,?)';

            $stm = $this->db->prepare($query);

            $stm->bindValue(1,$mat->get_final_date());
            $stm->bindValue(2,$mat->get_aluno()->get_id());
            $stm->bindValue(3,$mat->get_plano()->get_id());

            $stm->execute();

            $this->db=null;
        }

        public function getAllMat(){
            $query = 'select m.id_matricula, m.data_inicio, m.data_final, a.nome, p.descricao, p.periodicidade from matriculas m inner join alunos a on m.id_aluno = a.id_aluno inner join planos p on m.id_plano = p.id_plano';

            $stm = $this->db->prepare($query);

            $stm->execute();

            $this->db=null;

            return $stm->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>
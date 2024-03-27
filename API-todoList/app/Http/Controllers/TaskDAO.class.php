<?php 
    class TaskDAO {

        public function read($id){
            try{
                $sql = "SELECT * FROM task WHERE id = :id";
                $p_sql = Connection::getInstance()->prepare($sql);
                $p_sql->bindValue(":id",$id);

                $p_sql->execute();
                $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
            } catch(Exception $e){
                echo "Erro ao consultar dados no banco".$e->getMessage();
            }
        }
        public function readNOID(){
            try{
                $sql = "SELECT * FROM task ";
                $p_sql = Connection::getInstance()->prepare($sql);
                
                $p_sql->execute();
                $lista = $p_sql->fetchAll(PDO::FETCH_ASSOC);
                return $lista;
            } catch(Exception $e){
                echo "Erro ao consultar dados no banco".$e->getMessage();
            }
        }

        public function create($task){
            try {
            $sql =  "INSERT INTO task(title,description,dataTask) VALUES(:title, :description, :dataTask)";
            $p_sql = Connection::getInstance()->prepare($sql);
            $p_sql->bindValue(":title", $task->getTitle());
            $p_sql->bindValue(":description", $task->getDescription());
            $p_sql->bindValue(":dataTask", $task->getDataTask());

            $p_sql->execute();
            } catch (Exception $e){
                echo "Erro ao inserir dados ao banco".$e->getMessage();
            }
        } 

        public function update($task){
            try {
                $sql = "UPDATE task SET title = :title , description = :description, dataTask = :dataTask WHERE id = :id ";
                $p_sql = Connection::getInstance()->prepare($sql);
                $p_sql->bindValue(":title", $task->getTitle());
                $p_sql->bindValue(":id", $task->getId());
                $p_sql->bindValue(":description", $task->getDescription());
                $p_sql->bindValue(":dataTask", $task->getDataTask());
                
                return $p_sql->execute();
            } catch(Exception $e){
                echo"Erro ao atualizar dados da Tarefa:".$e->getMessage();
            }
    
        }
    
        public function delete($id){
            try{
                $sql = "DELETE FROM task WHERE id = :id";
                $p_sql = Connection::getInstance()->prepare($sql);
                $p_sql->bindValue(":id",$id);
                return $p_sql->execute();
            } catch(Exception $e) {
                echo"Erro ao deletar paciente: ".$e->getMessage();
            }
        }
    }


?>
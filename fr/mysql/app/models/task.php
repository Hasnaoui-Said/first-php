<?php
    require_once('data_provider.php');

    class Task extends DataProvider{

        public function addTask($content, $description){

            $db = $this->connect();
            if($db == null){
                return;
            }

            $sql = "INSERT INTO tasks (content, description) VALUES (:content, :description)";
            $smt = $db->prepare($sql);

            $smt->execute(
                [
                    ":content"=> $content,
                    ":description"=> $description
                ]
            );

            $smt = null;
            $db = null;
        }
        public function getAllTasks(){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $query = $db->query('SELECT * FROM tasks');

            // return une resultat sous form d'un ===>objet print_r($data[0]->id)....
            // $data = $query->fetchAll(PDO::FETCH_OBJ);
            // return une resultat sous form d'un ==>matrice print_r($data[0]->id)....
            $data = $query->fetchAll(PDO::FETCH_ASSOC);


            $query = null;
            $db = null;

            return $data;
        }
        public function getTaskById($id){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'SELECT * FROM tasks WHERE id = :id';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':id'=> $id
            ]);

            $data = $smt->fetch(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            if(!$data)
                return "Task data id= $id not found!";
            return $data;
        }
        public function searchTasks($search){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'SELECT * FROM tasks WHERE content LIKE :search OR description LIKE :search';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':search'=> "%$search%"
            ]);

            $data = $smt->fetchAll(PDO::FETCH_ASSOC);

            $query = null;
            $db = null;

            if(!$data)
                return [];
            return $data;
        }
        public function updateTasks($id, $content, $description){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'UPDATE tasks SET content = :content, description = :description WHERE id = :id';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':content'=> $content,
                ':description'=> $description,
                ':id'=> $id
            ]);

            $query = null;
            $db = null;
        }
        public function deleteTasks($id){

            $db = $this->connect();

            if($db == null){
                return;
            }

            $sql = 'DELETE FROM tasks WHERE id = :id';
            $smt = $db->prepare($sql);
            $smt->execute([
                ':id'=> $id
            ]);

            $query = null;
            $db = null;
        }
    }

?>
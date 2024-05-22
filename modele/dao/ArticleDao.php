<?php

    require_once 'ConnexionManager.php';

    class ArticleDao{

        private $bdd;
        
        public function __construct(){
            $this->bdd = ConnexionManager::getInstance();
        }

        public function getList(){
            $data = $this->bdd->query('SELECT * FROM Article');
            return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
        }

        public function getById($id){
            $data = $this->bdd->query('SELECT * FROM Article WHERE id = ' .$id);
            return $data->fetchAll(PDO::FETCH_OBJ);
        }

        public function getByCategoryId($id){
            $data = $this->bdd->query('SELECT * FROM Article WHERE categorie = ' .$id);
            return $data->fetchAll(PDO::FETCH_CLASS, 'Article');
        }

    }
?>
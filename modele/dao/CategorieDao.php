<?php

require_once 'ConnexionManager.php';

    class CategorieDao{

        private $bdd;
        private $id;
        private $libelle;
        
        public function __construct(){
            $this->bdd = ConnexionManager::getInstance();
        }

        public function getList(){
            $data = $this->bdd->query('SELECT * FROM Categorie');
            $reponse = $data->fetchAll(PDO::FETCH_CLASS, 'Categorie');
            return $reponse;
        }
    }
?>
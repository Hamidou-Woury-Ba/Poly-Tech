<?php 

    class ConnexionManager{

        private static $instance = null;
        private $connection;

        private function __construct() {
            try {
                $this->connection = new PDO('mysql:host=localhost;dbname=mglsi_news', 'root', '');
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Connection échouée: ' . $e->getMessage();
            }
        }

        public static function getInstance() {
            if (self::$instance === null) {
                self::$instance = (new ConnexionManager())->connection;
            }
            return self::$instance;
        }

    }

?>
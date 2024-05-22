<?php

    require_once 'modele/dao/ArticleDao.php';
    require_once 'modele/dao/CategorieDao.php';
    require_once 'modele/domaine/Article.php';
    require_once 'modele/domaine/Categorie.php';

    class Controller{
        function __construct(){

        }

        public function showAccueil(){
            $articleDao = new ArticleDao();
            $categorieDao = new CategorieDao();

            $articles = $articleDao->getList();
            $categorie = $categorieDao->getList();

            require_once 'vue/inc/accueil.php';
        }
        
        public function showArticle($id){
            $articleDao = new ArticleDao();
            $categorieDao = new CategorieDao();

            $articles = $articleDao->getById($id);
            $cateforie = $categorieDao->getList();

            require_once 'vue/inc/article.php';
        }

        public function showCategorie($id){
            $articleDao = new ArticleDao();
            $categorieDao = new CategorieDao();

            $articles = $articleDao->getByCategoryId($id);
            $categorie = $categorieDao->getList();

            require_once 'vue/inc/articleByCategorie.php';
        }

        public function showErrorPage(){

        }

    }

?>
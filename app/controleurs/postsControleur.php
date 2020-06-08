<?php

/*
    ./postsControleur.php
    CTRL des produits

    */
      namespace App\Controleurs\Posts;
      use \App\Modeles\Posts;
      use \App\Modeles\Tags;
      use \App\Modeles\Authors;
      use \App\Modeles\Comments;
      

      function indexAction(\PDO $connexion) {
        // 1. On demande les posts au modèle que l'on met dans $posts
          include_once '../app/modeles/postsModele.php';
          $posts = Posts\findAll($connexion);

        // 2. On charge la vue index dans $content
          GLOBAL $content;

          ob_start();
            include '../app/vues/posts/index.php';
          $content = ob_get_clean();
      }

      function showAction(\PDO $connexion, int $id){
        include_once '../app/modeles/postsModele.php';
        $post = Posts\findOneById($connexion, $id);

        include_once '../app/modeles/tagsModele.php';
        $tags = Tags\indexByPostId($connexion, $id);

        include_once '../app/modeles/authorsModele.php';
        $authors = Authors\findOneById($connexion, $id);

        include_once '../app/modeles/commentsModele.php';
        $comments = Comments\indexByPostId($connexion, $id);

        GLOBAL $content;

        ob_start();
          include '../app/vues/posts/show.php';
        $content = ob_get_clean();
      }

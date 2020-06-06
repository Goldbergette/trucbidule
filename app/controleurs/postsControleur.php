<?php

/*
    ./postsControleur.php
    CTRL des produits

    */
      namespace App\Controleurs\Posts;
      use \App\Modeles\Posts;

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
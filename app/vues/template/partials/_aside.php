<?php
/*
./app/vues/template/partials/_aside.php
*/ ?>
<div class="sidebar-box">
  <form action="#" class="search-form">
    <div class="form-group">
      <span class="icon icon-search"></span>
      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
    </div>
  </form>
</div>
<div class="sidebar-box ftco-animate">
  <div class="categories">
    <?php
     include_once '../app/controleurs/categoriesControleur.php';
     \App\Controleurs\Categories\indexAction($connexion);
          ?>
  </div>
</div>

<div class="sidebar-box ftco-animate">
  <h3>Recent Blog</h3>

  <?php
        include_once '../app/controleurs/postsControleur.php';
        \App\Controleurs\Posts\lastestIndex($connexion);
  ?>



</div>

<div class="sidebar-box ftco-animate">
  <h3>Tag Cloud</h3>
  <div class="tagcloud">
    <a href="#" class="tag-cloud-link">cat</a>
    <a href="#" class="tag-cloud-link">abstract</a>
    <a href="#" class="tag-cloud-link">people</a>
    <a href="#" class="tag-cloud-link">person</a>
    <a href="#" class="tag-cloud-link">model</a>
    <a href="#" class="tag-cloud-link">delicious</a>
    <a href="#" class="tag-cloud-link">desserts</a>
    <a href="#" class="tag-cloud-link">drinks</a>
  </div>
</div>

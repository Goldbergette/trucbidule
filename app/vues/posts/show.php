<?php
/*
./app/vues/posts/show.php
*/?>

<p class="mb-5">
  <img src="images/<?php echo $post['image']; ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title']; ?></h1>
<p><?php echo $post['content']; ?></p>

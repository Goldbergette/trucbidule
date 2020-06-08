<?php


 ?>
<?php foreach ($posts as $post): ?>
 <div class="block-21 mb-4 d-flex">
   <a class="blog-img mr-4" style="background-image: url('images/<?php echo $post['image']; ?>');"></a>
   <div class="text">
     <h3 class="heading"><a href="?postID=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h3>
     <div class="meta">
       <div><a href="#"><span class="icon-calendar"></span><?php echo $post['created_at']; ?></a></div>
       <div><a href="#"><span class="icon-person"></span> Admin</a></div>
       <div><a href="#"><span class="icon-chat"></span> 19</a></div>
     </div>
   </div>
 </div>
 <?php endforeach; ?>

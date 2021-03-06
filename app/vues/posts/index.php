<?php


?>

<div class="col-md-6 d-flex ftco-animate">

  <div class="blog-entry justify-content-end">
<?php foreach ($posts as $post): ?>
    <a href="?postID=<?php echo $post['id']; ?>" class="block-20" style="background-image: url('images/<?php echo $post['image']; ?>');">
    </a>
    <div class="text p-4 float-right d-block">
      <div class="topper d-flex align-items-center">
        <div class="one py-2 pl-3 pr-1 align-self-stretch">
          <span class="day"><?php echo $post['DAY(created_at)']; ?></span>
        </div>
        <div class="two pl-0 pr-3 py-2 align-self-stretch">
          <span class="yr"><?php echo $post['YEAR(created_at)']; ?></span>
          <span class="mos"><?php echo $post['MONTH(created_at)']; ?></span>
        </div>
      </div>
      <h3 class="heading mb-3"><a href="#"><?php echo $post['title']; ?></a></h3>
      <p><?php echo $post['resume']; ?></p>
      <p><a href="?postID=<?php echo $post['id']; ?>" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read more</a></p>
    </div>
      <?php endforeach; ?>
  </div>

</div>

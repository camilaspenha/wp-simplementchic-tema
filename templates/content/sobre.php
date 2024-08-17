<section id="sobre">
  <div class="container p-0">
    <div class="row p-0 m-auto">
      <div class="col-12 col-lg-6 col-1 order-0 order-lg-last d-flex flex-column justify-content-center">
        <div>
          <div class="title">
            <h2><?= $args['title'] ?></h2>
          </div>
          <div class="content">
            <?php
              foreach($args['content'] as $content){
                echo "<p>{$content['item']}</p>";
              }
            ?>
          </div>
          <div class="button">
            <a target="_blank" href="<?= $args['button']['link'] ?>" class="btn btn-dark"><?= $args['button']['label'] ?><i class="bi bi-arrow-right ms-1"></i></a>
          </div>
        </div>
      </div><!-- end col-1 -->
      <div class="col-12 col-lg-6 col-2 p-0" style="background-image: url(<?= $args['image']['url']?>)">
        <p><?= $args['image']['caption']?></p>
      </div><!-- end col-2 -->
    </div><!-- end row -->
  </div>
</section>
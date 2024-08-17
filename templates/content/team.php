<section id="team">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 col-lg-4 col-1">
        <div>
          <img class="img-fluid" src="<?= $args['image']['url']?>" alt="<?= $args['image']['alt']?>">
        </div>
      </div><!-- end col-1 -->
      <div class="col-12 col-lg-8 col-2 p-0">
        <div>
        <div class="title">
          <h2><?= $args['title']?></h2>
        </div>
        <div class="content">
          <?php 
            foreach ($args['content'] as $content) {
              foreach ($content as $item) { ?>
              <p><?= $item ?></p>
              <?php }
            }
          ?>
        </div>
        </div>
      </div><!-- end col-2-->
    </div><!-- end row -->
  </div><!-- end container -->
</section>
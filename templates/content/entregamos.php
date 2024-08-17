<section id="entregamos">  
  <div class="container p-0">
    <div class="row m-auto">
      <!-- <div class="col-12 col-md-7 col-1 order-last order-md-0 d-flex flex-column justify-content-center"> -->
      <div class="col-12 col-md-7 col-1 d-flex flex-column justify-content-center">
        <div>
          <div class="title">
            <h2><?= $args['title'] ?></h2>
          </div>
          <div class="content">
            <?php foreach ($args['content'] as $content) { 
              foreach ($content as $item) { ?>
              <div class="item">
                  <h3 class="handwriting"><?= $item['title'] ?></h3>
                  <p><?= $item['description'] ?></p>
                </div><!-- end item -->
              <?php  }
            } ?>
          </div><!-- end content -->
        </div>
      </div><!-- end col-1 -->
      <div class="col-12 col-md-5 col-2 text-center">
          <img class="img-fluid" src="<?= $args['image']['url']?>" alt="<?= $args['image']['alt'] ?>">
      </div><!-- end col-2 -->
    </div><!-- end row -->
  </div><!-- end container -->
</section>
<section id="hero" class="d-flex flex-column justify-content-center">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 col-lg-7 order-last order-lg-0 p-0">
        <div class="content">
          <h1><?= $args['title'] ?></h1>
          <h2><?= $args['description'] ?></h2>
          <div class="button">
            <a href="<?= $args['button']['link'] ?>" class="btn btn-accent"><?= $args['button']['label'] ?></a>
          </div> 
        </div><!-- end content -->
      </div><!-- end col -->
      <div class="col-12 col-lg-5"></div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>
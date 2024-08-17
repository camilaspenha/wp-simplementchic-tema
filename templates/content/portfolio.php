<section id="portfolio">
  <div class="container">
    <div class="row m-auto">
      <div class="title order-1">
        <h2><?= $args['title'] ?></h2>
      </div>
      <div class="insta order-0">
        <p><?= $args['label'] ?></p>
      </div>
      <div class="link order-last">
        <a target="_blank" href="<?= $args['link']['url'] ?>"><?= $args['link']['title'] ?></a>
      </div>
    </div><!-- end row -->
  </div> <!-- end container -->

  <div class="content">
    <div class="row m-auto">
    <?php 
      foreach ($args['content'] as $content) {
        foreach ($content as $item) { ?>
          <div class="col-6 col-sm-6 col-md-3 portfolio-item">
            <div class="portfolio-content h-100">
              <img src="<?= $item['image']['url'] ?>" class="img-fluid" alt="<?= $item['image']['alt'] ?>">
              <div class="portfolio-info">
                <a href="<?= $item['image']['url'] ?>" data-gallery="portfolio-gallery-app" class="glightbox preview-link" aria-label="Link para visitar nossa página no instagram"><i class="bi bi-zoom-in"></i></a>
                <a href="<?= $item['link']['url'] ?>" target="_blank" class="details-link" aria-label="Link para visitar nossa página no instagram"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div><!-- end col portfolio item -->
        <?php }
      }
    ?>
    </div><!-- end row -->
  </div><!-- end content -->
</section>
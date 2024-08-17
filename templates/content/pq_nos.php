<section id="pq_nos">
  <div class="container p-0">
    <div class="row m-auto">
      <div class="col-12 col-lg-6 col-1 ">
        <div>
          <div class="title">
            <h2><?= $args['title'] ?></h2>
          </div>
          <div class="content">
            <div>
              <?php
                foreach ($args['description'] as $description) {
                  foreach ($description as $item) { ?>
                  <p><?= $item ?></p>
                  <?php  }
                } 
              ?>
            </div>
            <div class="bg">
              <?php
                foreach ($args['feature'] as $feature) {
                  foreach ($feature as $item) { ?>
                  <h3><?= $item ?></h3>
                  <?php  }
                } 
              ?>
            </div>
          </div> <!-- end content -->
        </div>
      </div><!-- end col-1 -->
      <div class="col-12 col-lg-6 col-2 p-0" style="background-image: url(<?= $args['image']['url'] ?>)"> </div>
    </div><!-- end row -->
  </div><!-- end container -->
</section>
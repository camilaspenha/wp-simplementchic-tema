</main><!-- .page-content -->

<footer>
    <!-- Scroll Top Button -->
    <?php if ( ashe_options( 'page_footer_show_scrolltop' ) === true ) : ?>
    <span class="scrolltop">
    <i class="fa-solid fa-angle-up"></i>
    </span>
    <?php endif; ?>

    <div class="container">
      <div class="top">
        <div class="logo">
          <a class="navbar-brand" href="<?= get_blogInfo('url') ?>">
            <img width="195px" src="<?= get_stylesheet_directory_uri() . '/assets/img/logo.svg'?>" alt="Logo SimplementChic Identidades Olfativas Exclusivas">
          </a> 
        </div>
        <div class="content">
          <h4><?= get_theme_mod('slogan') ?></h4>
        </div>
        <div class="social">
          <ul class="d-flex justify-content-center">
            <li>
              <a aria-label="Link para Whatsapp" target="_blank" href="<?= get_theme_mod('whatsapp-api') ?>"><i class="bi bi-whatsapp"></i></a>
            </li>
            <li>
              <a aria-label="Link para Instagram" target="_blank" href="<?= get_theme_mod('instagram') ?>"><i class="bi bi-instagram"></i></a>
            </li>
            <li>
            <a aria-label="Link para e-mail" href="mailto:<?= get_theme_mod('email') ?>"><i class="bi bi-envelope"></i></a>
            </li>
          </ul>
        </div>
      </div><!-- end top -->
      <div class="bottom">
          <div class="copy">
              <span>©Copyright 2024 <strong style="color: var(--accent)">SimplementChic</strong></span> <span class="d-none d-lg-inline">-</span> <span><strong>Identidades Olfativas Exclusivas</strong></span> <span class="d-none d-lg-inline">|</span> <span>Todos os direitos reservados.</span>
          </div><!-- end copy -->
        <div class="selo mt-4 mt-lg-0">
          <div>
            <a target="_blank" href="https://sitecriativo.tec.br/"><img width="80px" src="<?= get_stylesheet_directory_uri() . '/assets/img/logo_site_criativo.svg'?>" alt="logo"></a>
          </div>
        </div>
      </div><!-- end bottom -->
    </div><!-- end container -->
</footer><!-- #page-footer -->

</div><!-- #page-wrap -->

<?php wp_footer(); ?>

<!-- VENDOR -->
<script src="<?= get_stylesheet_directory_uri() . '/assets/vendor/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
<script src="<?= get_stylesheet_directory_uri() . '/assets/vendor/node_modules/glightbox/dist/js/glightbox.min.js'?>"></script>

<!-- MAIN JS -->
<script type="module" src="<?= get_stylesheet_directory_uri()  . '/assets/js/dist/main.js'  ?>"></script>
</body>
</html>
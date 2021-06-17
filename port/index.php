<?php get_header(); ?>
  <div class="blogs">
    <h1> ━ blogs ━ </h1>
  </div>

<section class="bloglist">
  <div class="row">
    <div class="bloglist-col">
      <a href="<?php echo site_url('/travel') ?>">
        <img src="<?php echo get_template_directory_uri()?>/images/od.jpg" alt="">
          <div class="layer">
            <h3> Travel <h3>
          </div>
      </a>
    </div>
    <div class="bloglist-col">
      <a href="<?php echo site_url('/photog') ?>">
        <img src="<?php echo get_template_directory_uri()?>/images/photog4.jpg" alt="">
          <div class="layer">
            <h3> Photography <h3>
          </div>
      </a>
    </div>
    <div class="bloglist-col">
      <a href="<?php echo site_url('/pets') ?>">
        <img src="<?php echo get_template_directory_uri()?>/images/lili.jpg" alt="">
          <div class="layer">
            <h3> Pets <h3>
        </div>
      </a>
    </div>  
  </div>
</section>

<br>
  <?php  
  get_footer();
?>
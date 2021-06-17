<?php /** Template Name: page-travel **/ ?> 

<?php get_header(); ?>

<section class="travel">
    <div class="title">
        <h2> <?php the_title();?> </h2>
    </div>
    <div class="travel-content">
        <div class="tr-col">
            <img src="<?php echo get_template_directory_uri()?>/images/travel1.jpg" alt="" >
            <img src="<?php echo get_template_directory_uri()?>/images/whang.jpg" alt="" >
        </div>
    </div>
    <div class="tcont">  
            <p><?php the_content(); ?></p>
            <br>
            <br>
    </div>
    <div class="travel-content2">
        <div class="tr-col2">
            <img src="<?php echo get_template_directory_uri()?>/images/tr1.jpg" alt="" >
            <img src="<?php echo get_template_directory_uri()?>/images/tr2.jpg" alt="" >
        </div>
    </div>
    
</section>

<?php get_footer(); ?>
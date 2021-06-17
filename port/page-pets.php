<?php /** Template Name: page-pets **/ ?>  
<?php get_header(); ?>

<section class="pets">
    <div class="title">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="pt">
    <div class="pt-col">
            <p> Hello ! Get to know my pets. </p>
            <img src="<?php echo get_template_directory_uri()?>/images/luna.jpg" alt="" title ="Luna " >
            <img src="<?php echo get_template_directory_uri()?>/images/lili2.jpg" alt="" title ="Lili ">
            <img src="<?php echo get_template_directory_uri()?>/images/emirates.jpg" alt="" title ="Emirates">
        </div>
    </div>
    <div class="pets-content">
        <br>
        <p><?php the_content(); ?></p>
        <br>
    </div>
</section>
<?php get_footer(); ?>
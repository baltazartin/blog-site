<?php /** Template Name: page-about **/ ?>  
<?php get_header(); ?>

<div class="about">
    <h1> <?php the_title(); ?> </h1>
</div>

<section class="about-about">
    <div class="page-about">
        <img src="<?php echo get_template_directory_uri()?>/images/tin.jpg" alt="">
    </div>
    <div class="about-title">
        <h2> Hello, <br> I am Tin! </h2>
        <br>
        <p> <?php the_content(); ?> </p>
        <br>
        <button id="port-btn">Load more</button>
        <br>
        <div id="port-cont"></div>
        <br>
        <br>
    </div>
</section>


<?php get_footer(); ?> 
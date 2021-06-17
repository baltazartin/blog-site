<?php /** Template Name: page-photog **/ ?>  
<?php get_header(); ?>


<section class="photog">
    <div class="title">
        <h2><?php the_title(); ?></h2>
    </div>
    <div class="photog-content">
        <p><?php the_content(); ?> </p>
    </div>
    <div class="p-row">
        <div class="p-col">
            <img src="<?php echo get_template_directory_uri()?>/images/busc1.jpg" alt="" title="Buscalan, Kalinga">
            <img src="<?php echo get_template_directory_uri()?>/images/photog.png" alt="" title="UPHSL">
            <img src="<?php echo get_template_directory_uri()?>/images/photog3.jpg" alt=""title="UPHSL">
        </div>
        <div class="p-col">
            <img src="<?php echo get_template_directory_uri()?>/images/photog2.jpg" alt=""title="National Museum, Manila">
            <img src="<?php echo get_template_directory_uri()?>/images/perps.jpg" alt=""title="UPHSL">
            <img src="<?php echo get_template_directory_uri()?>/images/buscssss.jpg" alt=""title="Buscalan, Kalinga">
        </div>
        <div class="p-col">
            <img src="<?php echo get_template_directory_uri()?>/images/busc7777.jpg" alt="" title="Buscalan, Kalinga">
            <img src="<?php echo get_template_directory_uri()?>/images/hehehe.jpg" alt="" title="Buscalan, Kalinga">
            <img src="<?php echo get_template_directory_uri()?>/images/photog5.jpg" alt=""title="Coffee Shop in Manila">
        </div>
    
    </div>
</section>

<?php get_footer(); ?>
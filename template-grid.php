<?php
/**
 * Template Name:Image Grid Layout Template
 */
?>

<img class="img-responsive" src="<?php the_field('grid_header_image') ?>" alt="header image">
<hr/>


<?php while (have_posts()) : the_post(); ?>
<section>
<div class="col-sm-6">

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
</div>
<div class="col-sm-6">
    <img class="img-responsive" src="<?php the_field('grid_image_one') ?>" alt="store image">
</div>
</section>
<hr/>
<section>
    <div class="col-sm-6" >
        <img class="img-responsive" src="<?php the_field('grid_image_two') ?>" alt="store image">
    </div >
    <div class="col-sm-6">
        <h2><?php the_field('grid_headline_two') ?></h2>
        <p><?php the_field('grid_paragraph_two') ?></p>
    </div>

</section>

<?php endwhile; ?>

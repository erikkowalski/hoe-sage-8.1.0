<?php
/**
 * Template Name:Image Grid Layout Template
 */
?>

<img class="img-responsive" src="<?php the_field('grid_header_image') ?>" alt="header image">


<?php while (have_posts()) : the_post(); ?>
<section class="grid-one clearfix ">
<div class="col-sm-6">

<?php get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
</div>
    <div class="col-sm-6 store-img">
        <img class="img-responsive " src="<?php the_field('grid_image_one') ?>" alt="image">
    </div>
</section>
<section  class="grid-two clearfix ">
    <div class="col-sm-6" >
        <img class="img-responsive" src="<?php the_field('grid_image_two') ?>" alt="image">
    </div >
    <div class="col-sm-6">
        <h2><?php the_field('grid_headline_two') ?></h2>
        <div><?php the_field('grid_paragraph_two') ?></div>
    </div>
</section>
   <section class="bottom-content clearfix">

       <div class="col-sm-6 col-md-4"><img class="img-responsive" src="<?php the_field('bottom_content_area_image')?>" alt="bottom image"></div>
       <div class="col-sm-6 col-md-4">
        <h2> <?php the_field('bottom_content_area_headline') ?></h2>
             <?php the_field('grid_bottom_content_area') ?>
    </div>
       <div class="col-sm-12 col-md-4">
        <?php the_field('second_bottom_content_area') ?>
    </div>
</section>

<?php endwhile; ?>

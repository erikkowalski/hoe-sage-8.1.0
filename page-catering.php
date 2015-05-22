<section class="catering">
<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<div class="body-text">
<?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>
</section>

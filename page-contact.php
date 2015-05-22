<?php while (have_posts()) : the_post(); ?>
<?php get_template_part('templates/page', 'header'); ?>
<section class="contact-info">
<?php get_template_part('templates/content', 'page'); ?>
</section>
<?php endwhile; ?>

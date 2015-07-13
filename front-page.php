<div class="home-wrapper">

    <!-- Carousel
================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner" role="listbox">

            <div class="item active">
                <img  src="<?php the_field('slider_image_one'); ?>" alt="First slide">
                <div class="first container">
                    <div class="carousel-caption">
                        <h1> <?php the_field('slide_one_headline'); ?></h1>
                        <h2> <?php the_field('slide_one_subhead_one'); ?></h2>
                        <hr/>
                        <h3> <?php the_field('slide_one_subhead_two'); ?></h3>
                        <p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
                    </div>
                </div>
            </div>


        <div class="item">
            <img  src="<?php  the_field('slider_image_two'); ?>" alt="Second slide">
                <div class="menu container">
                    <div class="carousel-caption">
                        <h1> <?php  the_field('slide_two_headline'); ?></h1>
                        <p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
            <img  src="<?php  the_field('slider_image_three'); ?>" alt="Second slide">
                <div class="menu container">
                    <div class="carousel-caption">
                        <h1> <?php  the_field('slide_three_headline'); ?></h1>
                        <p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
                    </div>
                </div>
            </div>

            <div class="item">
            <img  src="<?php  the_field('slider_image_four'); ?>" alt="Second slide">
                <div class="menu container">
                    <div class="carousel-caption">
                        <h1> <?php  the_field('slide_four_headline'); ?></h1>
                        <p><a class="btn btn-lg btn-primary" href="our-menu/lunch-menu/" role="button">View Menu</a></p>
                    </div>
                </div>
            </div>


        </div>

            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->

    <section class="about-headline-section">
        <div class="front-page-post-content">
            <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('templates/content', 'page'); ?>
            <?php endwhile; ?>
        </div>
    </section>

    <section class="about-us clearfix">
            <div class="col-md-6">
                <h2><?php the_field('about_us_tittle') ?></h2>
                <p><?php the_field('about_us') ?></p>
            </div>
            <div class="col-sm-6 col-md-6 about-img">
                <img class="img-responsive" src="<?php the_field('about_us_img') ?>" alt="about how on earth image">
            </div>
        <div class="col-sm-6 visible-sm green-peppers  about-img ">
            <img class="img-responsive  " src="<?php the_field('local_now_img') ?>" alt="about how on earth image">
        </div>
    </section>
    <section class="local-now clearfix">
        <div class="hidden-sm col-md-6 about-img">
            <img class="img-responsive  hidden-xs" src="<?php the_field('local_now_img') ?>" alt="about how on earth image">
        </div>
            <div class="col-sm-12 col-md-6 local-now-content">
                <h2><?php the_field('whats_local_now_headline') ?></h2>
                <div><?php the_field('local_now') ?></div>
            </div>
    </section>

    <section class="clearfix recent-posts">
		 <?php //Display 3 random News Posts
	$recent_posts_args = [
	'posts_per_page' => 4,

];


$recent_posts = new \WP_Query( $recent_posts_args ); ?>
		 <h3>Recent Posts</h3>
		 <aside  class="row">
			 <?php while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); ?>
			 <div class="col-md-3">
				 <h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
				 <div class="entry-content">
					 <?php the_excerpt();?>
				 </div>
			 </div>
			 <?php endwhile;
wp_reset_postdata();
			 ?>
		 </aside>
	</section>

    <section class="kitchen-store-section">
        <div class="the-store col-sm-6">
           <div class="grey-box">
                <h1><?php the_field('the_store_headline') ?></h1>
                <p><?php the_field('the_store_description') ?></p>
               <a href="<?php the_field('the_store_learn_more') ?>">Learn More</a>
            </div>
            <img class="img-responsive" src="<?php the_field('the_store_image') ?>" alt="picture products from store"  >
        </div>
        <div class="the-kitchen col-sm-6">
           <div class="grey-box">
                <h1><?php the_field('the_kitchen_headline') ?></h1>
                <p><?php the_field('the_kitchen_description') ?></p>
               <a href="<?php the_field('the_kitchen_learn_more') ?>">Learn More</a>
            </div>
            <img class="img-responsive" src="<?php the_field('the_kitchen_image') ?>" alt="picture of how on earths commercial kitchen"  >
        </div>
    </section>






    </div> <!-- /home-wrapper -->


<?php
/*
Template Name: LWYD
*/

get_header(); ?>


<div class="lwyd-box">
	<img src="" />
</div>


<div class="lwyd-container">
  <?php 

$args = array(

    'post_type' => array('lwyd'),
    'posts_per_page' => -1,
    'orderby' => 'rand'
    );



$query = new WP_Query( $args );

?>
<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<section>
<img src="<?php the_field('img') ?>" />
<p><?php the_field('designer') ?></p>
</section>
<?php endwhile; else: ?>
<p>No show</p>
<?php endif; ?>
</div>
<?php get_footer(); ?>
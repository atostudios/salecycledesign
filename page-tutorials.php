<?php
/*
Template Name: Tutorials
*/

get_header(); ?>
<div class="tutorials large-12">
<div class="tutorial-container">
	
	<form role="search" method="get" class="search-form" action="">
	<label>
	
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"/>
	</label>
	<input type="submit" class="search-submit search-btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>



   <?php 

$args = array(

    'post_type' => array('tutorial')

    );

$query = new WP_Query( $args );

?>

<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<a href="<?php the_permalink(); ?>" class="large-12">
	<h1><?php the_title() ?></h1>
	<p><?php the_field('desc') ?></p>
</a>
	<?php endwhile; else: ?>

	<p>No show</p>

<?php endif; ?>
</div>
</div>







<?php get_footer(); ?>


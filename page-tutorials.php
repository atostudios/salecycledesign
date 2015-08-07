<?php
/*
Template Name: Tutorials
*/

get_header(); ?>
<div class="tutorials large-12">
	
   <?php 

$args = array(

    'post_type' => array('tutorial')

    );

$query = new WP_Query( $args );

?>


<div class="tutorials-header group">
<h1>Design Tutorials</h1>
<p>A range of tutorials written by the talented SaleCycle Design Team.</p>
<!-- search form -->
<form role="search" method="get" class="search-form" action="">
	<label>
	
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"/>
	</label>
	<input type="submit" class="search-submit search-btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
</div>



<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<!-- get the title -->
<?php
$thetitle = get_the_title(); 
$getlength = strlen($thetitle);
$thelength = 20;
?>

<!-- get the featured image url -->
<?php
$post_thumbnail_id = get_post_thumbnail_id();
$post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
?>


	<!-- flex article container -->
	<a href="<?php the_permalink(); ?>" class="article large-4 medium-6 small-12">
		<div class="article-contain">
			<h2>
				<?php
				echo substr($thetitle, 0, $thelength);
				if ($getlength > $thelength) echo "...";
				?>
			</h2>
			<p><?php the_field('desc') ?></p>
			<?php 
			if ( has_post_thumbnail() ) { // check if the post has a featured image assigned to it.
				echo '<div class="grid_img"><img class="tilt-effect" src="'. $post_thumbnail_url . '" alt="The image" /></div>';
			} 
			?>
		</div>
	</a>



	<?php endwhile; else: ?>

	<p>No show</p>

<?php endif; ?>

<!-- </div> -->
</div>







<?php get_footer(); ?>


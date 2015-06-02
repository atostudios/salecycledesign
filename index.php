<?php get_header(); ?>
<!-- Wrap Content -->
	<div class="home-content large-12">
		
		<header class="large-12">
			<h1>SaleCycle Design Guidelines</h1>
			<p>Not all those who wander are lost.</p>
			<!--<a href="#">Download PDF</a>-->
		</header>


    <?php 

$args = array(

    'post_type' => array('emr', 'osr')

    );

$query = new WP_Query( $args );

?>
	
	<!-- EMR -->

	<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<section class="large-12">
		<a href="<?php the_permalink(); ?>">
		
		<h1><?php the_title(); ?></h1>
		
		<p><?php the_field('desc')  ?></p>
		
		</a>
	</section>
	<?php endwhile; else: ?>

	<p>No show</p>

<?php endif; ?>
	<section class="large-12">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Linkwizard' ) ) ) ?>">
			<h1>Linkwizard</h1>
			<p>Sorting your link order needs. Prefix and order all links in your template right here.</p>
		</a>
	</section>
	
	<section class="large-12">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Templates' ) ) ) ?>">
			<h1>Templates</h1>
			<p>Example templates for each sector. Fluid responsive templates to use as a base or to kick start ideas.</p>
		</a>
	</section>
	<section class="large-12">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Placeholders' ) ) ) ?>">
			<h1>Placeholders</h1>
			<p>All of the standard SaleCycle placeholders in oneplace. The dream.</p>
		</a>
	</section>
	<section class="large-12">
		<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Tutorials' ) ) ) ?>">
			<h1>Tutorials</h1>
			<p>Find all of the resources you need to make bulletproof emails.</p>
		</a>
	</section>
	
<?php get_footer(); ?>
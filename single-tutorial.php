<?php get_header(); ?>
<div class="guideline-page large-12">
		<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
		<header class="large-12"  style="background:url('<?php echo $url; ?>');background-size:cover;">
			<h1><?php the_title(); ?></h1>
			<p><?php the_field('tag_line')  ?></p>
			<!--<a href="#">Download PDF</a>-->
		</header>



			<section class="large-12 medium-12">
		<div class="content-width">
	<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>
		</div>
	</section>

<?php get_footer(); ?>
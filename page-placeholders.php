<?php
/*
Template Name: Placeholders
*/

get_header(); ?>
<div class="placeholder-page large-12">
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<header class="large-12" style="background:url('<?php echo $url; ?>');background-size:cover;">
			<h1>Placeholders</h1>
			<p>All of the latest placeholders in one place!</p>
			
		</header>


	<section class="large-12 medium-12">
		<div class="content-width">

<div class="placeholder-filter">
	<input type="radio" name="option" id="standard" value="standard" checked="checked" /><span>Standard</span>
	<input type="radio" name="option" id="travel" value="travel" /><span>Travel</span>
	<input type="radio" name="option" id="hotel" value="hotel" /><span>Hotel</span>
	<input type="radio" name="option" id="airline" value="airline" /><span>Airline</span>
	<input type="radio" name="option" id="travelagent" value="travelagent" /><span>Travel Agent</span>
</div>

<table class="placeholder-table" width="100%" border="0" cellspacing="0" cellpadding="0">
	<thead>
	<tr>
	<th>Name</th>
	<th>Description</th>
	</tr>
	</thead>
	<tbody>

	<?php 

	$args = array(

	'post_type' => array('placeholder'),
	'nopaging' => true,
	'meta_key' => 'type',
	'orderby' => 'meta_value',
	'order' => 'DESC'

	);

	$query = new WP_Query( $args );

	?>
	<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	<tr class="<?php the_field('type') ?>">
	<td><a class="p-link copy" title="Click to copy to clipboard" data-clipboard-text="<?php the_title() ?>"><?php the_title() ?></a></td>
	<td><?php the_field('placeholder_description') ?></td>
	</tr>
	<?php endwhile; else: ?>

	<p>No show</p>

	<?php endif; ?>
	</tbody>
</table>

		</div>
	
	</section>
	


<?php get_footer(); ?>

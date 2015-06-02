<?php
/*
Template Name: Templates
*/

get_header(); ?>

<div class="template-page large-12">
	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<header class="large-12" style="background:url('<?php echo $url; ?>');background-size:cover;">
			<h1>Templates</h1>
			<p>All of the latest placeholders in one place!</p>
			<!--<a href="#">Download PDF</a>-->
		</header>
<section class="large-12 medium-12">

	<div class="content-width">

<!--PW PROTC-->
<?php if ( post_password_required() ) { ?>



<div class="pw-overlay">
 <div class="pw-box">
 <p>
 This page is password protected.
 </p>
<form method="post" action=" <?php echo site_url(); ?>/wp-login.php?action=postpass">

<input name="post_password" placeholder="Password" class="ClientPasswordInput" id="' . $label . '" type="password" /><br />

<input type="submit"  class="ClientSubmit" name="Submit" value="Submit" />

</form>
</div>
</div>
</div>
</section>

<?php } else { ?>


		<h1 class="large-12">Blank Templates</h1>
		
		    <?php 

$args = array(

    'post_type' => array('blanktemplates')

    );



$query = new WP_Query( $args );

?>
<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="box large-3 medium-6 small-12 template-contain">
							<div class="front">
							
							<?php the_post_thumbnail(); ?>
							<h1><?php the_title() ?></h1>
							<p><?php the_field('type')  ?></p>
						
							</div>
							<?php 
							$zip = 'zip';
							$html = 'html';
							$psd = 'psd';

							 ?>
							<div class="back">



							<?php if ( get_field($html) and get_field($psd) and get_field($zip) == TRUE ) { ?>

							<a href="<?php the_field('html')  ?>" class="button icon-html"><?php the_title() ?>.html</a>
							<a href="<?php the_field('psd')  ?>" class="button icon-psd"><?php the_title() ?>.psd</a>
							<a href="<?php the_field('zip')  ?>" class="button icon-zip">Download both</a>

							<?php } elseif ( get_field($html) and get_field($psd) == TRUE ) { ?>

							<a href="<?php the_field('html')  ?>" class="button icon-html"><?php the_title() ?>.html</a>
							<a href="<?php the_field('psd')  ?>" class="button icon-psd"><?php the_title() ?>.psd</a>
						

							<?php } elseif ( get_field($html) == TRUE ) { ?>

							<a href="<?php the_field('html')  ?>" class="button icon-html"><?php the_title() ?>.html</a>							


							<?php } elseif ( get_field($psd) == TRUE ) { ?>

							<a href="<?php the_field('psd')  ?>" class="button icon-psd"><?php the_title() ?>.psd</a>

						    <?php } ?>

 							</div>
			</div>

		<?php endwhile; else: ?>
	</div>
	<p>No show</p>

<?php endif; ?>

<h1 class="large-12">Populated Templates</h1>

       <?php 

$args = array(

    'post_type' => array('populatedtemplates')

    );

$query = new WP_Query( $args );

?>
<?php if ( have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
			<div class="box large-3 medium-6 small-12 template-contain">
							<div class="front">
							
							<?php the_post_thumbnail(); ?>
							<h1><?php the_title() ?></h1>
							<p><?php the_field('type')  ?></p>
						
							</div>
							<?php 
							$zip = 'zip';
							$html = 'html';
							$psd = 'psd';

							 ?>
							<div class="back">



							<?php if ( get_field($html) and get_field($psd) and get_field($zip) == TRUE ) { ?>

							<a href="<?php the_field('html')  ?>" class="button icon-html"><?php the_title() ?>.html</a>
							<a href="<?php the_field('psd')  ?>" class="button icon-psd"><?php the_title() ?>.psd</a>
							<a href="<?php the_field('zip')  ?>" class="button icon-zip">Download both</a>

							<?php } elseif ( get_field($html) and get_field($psd) == TRUE ) { ?>

							<a href="<?php the_field('html')  ?>" class="button icon-html"><?php the_title() ?>.html</a>
							<a href="<?php the_field('psd')  ?>" class="button icon-psd"><?php the_title() ?>.psd</a>
						

							<?php } elseif ( get_field($html) == TRUE ) { ?>

							<a href="<?php the_field('html')  ?>" class="button icon-html"><?php the_title() ?>.html</a>							


							<?php } elseif ( get_field($psd) == TRUE ) { ?>

							<a href="<?php the_field('psd')  ?>" class="button icon-psd"><?php the_title() ?>.psd</a>

						    <?php } ?>

 							</div>
			</div>

		<?php endwhile; else: ?>
	</div>
	<p>No show</p>

<?php endif; ?>

</div>
</section>














<?php } ?>

<!-- END OF PW PRTC -->




<?php get_footer(); ?>
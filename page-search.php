<?php
/*
Template Name: Search Page
*/

get_header(); ?>
<div class="tutorials large-12">
<div class="tutorial-container">
<form role="search" method="get" class="search-form" action="<?php bloginfo(159); ?>">
	<label>
	
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s"/>
	</label>
	<input type="submit" class="search-submit search-btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>


<h1><?php echo get_search_query(); ?></h1>

<?php
$s=get_search_query();
$args = array(
                's' =>$s

            );
    // The Query
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: ".get_query_var('s')."</h2>");
        while ( $the_query->have_posts() ) {
           $the_query->the_post();
                 ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                 <?php
        }
    }else{
?>
        <h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
        <div class="alert alert-info">
          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
        </div>
<?php } ?>




</div>
</div>







<?php get_footer(); ?>


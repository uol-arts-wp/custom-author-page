<?php get_header(); ?>

	<div class="individual-profile-container">
		
	    <h1>Author: <?php the_title();?><h1>
	    <figure><?php the_post_thumbnail(); ?></figure>

	    <p><strong>Author Bio</strong></p>
	    <p><?php the_field('author_bio'); ?></p>
	    <p><strong>Bibliography<strong></p>
	    <p><?php the_field('bibliography'); ?></p>
	    <p><strong>Website</strong></p>  
	    <p><?php the_field('website'); ?></p>

	</div>  

	<div class="clear-both">&nbsp;</div>  

<?php get_footer(); ?>
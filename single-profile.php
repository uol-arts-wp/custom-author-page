<?php get_header(); ?>


<div class="individual-profile-container">
	
    Author: <?php the_title();?></br>
    <?php the_post_thumbnail(); ?></br>

    Author Bio</strong><br />
    <?php the_field('author_bio'); ?></br>
    Bibliography</br>
    <?php the_field('bibliography'); ?></br>
    Website</strong></br>   
    <?php the_field('website'); ?></br>

</div>  

<div class="clearer">&nbsp</div>  

<?php get_footer(); ?>
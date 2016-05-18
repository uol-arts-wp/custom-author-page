<?php 
/*
Template Name: Author Profiles
*/
get_header(); ?>

  <div class="profiles">

  <!--============== basic loop ==============-->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
       
    <?php endwhile; else : ?>
    	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>

    <!--=============== WP_Query Loop ======================-->

        <?php $args = array( 'post_type' => 'profile'); 
        $the_query = new WP_Query( $args ); ?>       
        
        <?php if (have_posts () ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
       
          <div class="profile-container">   
            <a href="<?php the_permalink();?>"><?php the_title(); ?><br />
             <?php the_post_thumbnail(); ?></a>
          </div>
           
        <?php endwhile; else:?>
        <?php endif; ?>   
        <?php wp_reset_postdata(); ?>

  </div>

  <div class="clearer">&nbsp;</div>  

<?php get_footer(); ?>
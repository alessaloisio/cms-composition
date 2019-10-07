  <?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <!-- Si l'Article est dans la Catégorie que nous souhaitons exclure, nous passons à l'Article suivant. -->
  <!-- Nous voulons exclure les projets -->
  <?php if (in_category('3')) continue; ?> 
  <div class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y'); ?></small>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
  </div> <!-- fin du premier bloc div -->
  <?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  <?php endif; ?>

  <?php get_footer(); ?>  
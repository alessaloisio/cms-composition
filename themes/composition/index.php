<!-- BLOG PAGE -->

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- Nous voulons exclure les projets -->
  <?php if (in_category('projets')) continue; ?> 

  <!-- début d'un bloc post -->
  <div class="post">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <small><?php the_time('F jS, Y'); ?></small>
    <div class="entry">
      <?php the_content(); ?>
    </div>
    <p class="postmetadata">Posted in <?php the_category(', '); ?></p>
  </div>
  <!-- fin d'un bloc post' -->

<?php endwhile; else: ?>
  <p><?php _e('Désolé, nous n\'avons pas d\'article à vous proposez pour le moment.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>  
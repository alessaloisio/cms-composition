<?php /* Template Name: Architecture Template */ ?>

<?php get_header(); ?>

<!-- Permet de faire un query pour récupérer les projets -->
<!-- https://codex.wordpress.org/the_loop => Multiple Loops Example 2 -->
<?php query_posts( 'category_name=projets' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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
  <p><?php _e('Désolé, nous n\'avons pas de projet à vous présentez pour le moment.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>  
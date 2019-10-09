<?php /* Template Name: Architecture Template */ ?>

<?php get_header(); ?>



<div class="content">
  <div class="block-black"></div>
  <div class="center">
    <section class="container-diaporama">
      <h1>Prendre soin de votre schéma de vie.</h1>
      <div class="content-diaporama">
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
      </div>
    </section>
    <section class="histoire"></section>
    <section class="caractere"></section>
  </div>
</div>

<?php get_footer(); ?>  
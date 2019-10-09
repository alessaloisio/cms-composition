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

        <div class="posts">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- début d'un bloc post -->
            <div class="post">
              <?php the_post_thumbnail(); ?>
              <div class="info-project">
                <div class="info-content">
                  <h2 class="title"><?php the_title(); ?> - <?php the_time('Y'); ?></h2>
                  <a class="link" href="<?php the_permalink(); ?>">Voir le projet</a>
                </div>
              </div>
            </div>
            <!-- fin d'un bloc post' -->

          <?php endwhile; else: ?>
            <p><?php _e('Désolé, nous n\'avons pas de projet à vous présentez pour le moment.'); ?></p>
          <?php endif; ?>
        </div>
      </div>
    </section>
    <section class="histoire"></section>
    <section class="caractere"></section>
  </div>
</div>

<?php get_footer(); ?>  
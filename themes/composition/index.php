<!-- BLOG PAGE -->
<?php get_header(); ?>

<div class="page-content root-bloglist">
  <div class="block-black"></div>
  <div class="block-content center">
    <section class="container-diaporama">

      <h1>Architecture d'intérieur en action</h1>
        
      <div class="container-bloglist" >
        <?php
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

          query_posts(array(
              "category_name" => "articles",
              "posts_per_page" => 6,
              'paged' => $paged
            )
          );
        ?>
        <?php if ( have_posts() ):  ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <!-- début d'un bloc post -->
            <div class="post" class="attachment">
              <div class="image"><?php the_post_thumbnail(array(670,500)); ?></div>
              <div class="post-content">
                <div class="title"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></div>
                <div class="date">
                  <span class="trait"></span>
                  <p>
                    <?php 
                      setlocale(LC_ALL, 'fr_FR');
                      $timepost = strtotime(get_post()->post_date);
                      echo strftime("%e %B %Y", $timepost)
                    ?>
                  </p>
                </div>
              </div>
            </div>  
          <!-- fin d'un bloc post' -->
          <?php endwhile; ?>

          <!-- https://codex.wordpress.org/Pagination -->
          <div class="pagination">
            <div class="nav-previous">
                <?php previous_posts_link( '<div class="btn" ><</div>' ); ?>
            </div>
            <div class="nav-next ">
                <?php next_posts_link( '<div class="btn" >></div>' ); ?>
            </div>
          </div>
          
        <?php else: ?>
          <p><?php _e('Désolé, nous n\'avons pas d\'article à vous proposez pour le moment.'); ?></p>
        <?php endif; ?>     
      </div>

    </section>
  </div>
</div>

<?php get_footer(); ?>  
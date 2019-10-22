<!-- BLOG PAGE -->
<?php get_header(); ?>
<div class="page-content">
   <div class="block-black index"></div>
      <?php query_posts(array("category_name" => "articles","posts_per_page" => 6 )); ?>
      <section>
      <h1> "Architecte d'intérieur en action"
      :: after</h1> 
      </section>
     
        <div class="container-bloglist" >
         
             <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- début d'un bloc post -->
             <div class="post" class="attachment" >
                <div class="image"><?php the_post_thumbnail(array(670,500)); ?></div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <small><?php the_time('F jS, Y'); ?></small>
              </div>
            <!-- fin d'un bloc post' -->
              <?php endwhile; else: ?>
                <p><?php _e('Désolé, nous n\'avons pas d\'article à vous proposez pour le moment.'); ?></p>
                  <?php endif; ?>
          
      </div>
</div>


<?php get_footer(); ?>  
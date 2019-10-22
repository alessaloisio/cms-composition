<!-- BLOG PAGE -->

<?php get_header(); ?>

<div class="container-bloglist">

<?php query_posts(array(
    "category_name" => "articles",
    "posts_per_page" => 6
)); ?>
<div class="banner-bloglist">
 
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <!-- début d'un bloc post -->
 
    <div class="post" >

      <?php the_post_thumbnail(); ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <small><?php the_time('F jS, Y'); ?></small>
    </div>
    
   
    

  <!-- fin d'un bloc post' -->

<?php endwhile; else: ?>
  <p><?php _e('Désolé, nous n\'avons pas d\'article à vous proposez pour le moment.'); ?></p>
<?php endif; ?>
</div>


<?php get_footer(); ?>  
<?php get_header(); ?>

<h1>Front Page</h1>
<div class="dispo_imgs">
    <img class="image" src="<?php echo get_field('bandeau_image_g')['sizes']['medium_large']; ?>">
    <img class="image" src="<?php echo get_field('bandeau_image_d')['sizes']['medium_large']; ?>">
</div>
<h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
<h3 class="sous-titre"><?php the_field('bandeau_survol_g')['titre'] ?></h3>


<?php 
  $group = get_field('bandeau_bouton');

  if($group['title']) :

  $url = $group['url'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
  } ?>

  <a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
      <div class="icon-container">
        <img class="icon" href="<?php echo "./composition/wp-content/themes/composition/assets/svg/fleche-droite.svg"; ?>">
      </div>
      <p><?php echo $group['title']; ?></p>
  </a>

  <?php endif; ?>

<?php get_footer(); ?>  
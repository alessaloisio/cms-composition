<?php get_header(); ?>

<h1>Front Page</h1>

<section class="section_bandeau">
   <!---------------------------------------------------------------------------BANDEAU--------------------------------------------------------------------->
  <!--COL GAUCHE BANDEAU-->
  <div class="bandeau_col-g">
    <img class="bandeau_img" src="<?php echo get_field('bandeau_image_g')['sizes']['medium_large']; ?>">
    <div class="bandeau_white-container bandeau_block">
      <h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
    </div>
    <!--HOVER-->
    <div class="bandeau_white-container-hover bandeau_hover">
      <h3><?php the_field('bandeau_survol_g_titre')['titre'] ?></h3>
      <p><?php the_field('bandeau_survol_g_texte_g')['titre'] ?></p>
      <?php 
        $group = get_field('bandeau_btn_g');

        if($group['titre']) :

        $url = $group['url'];
        $target = 'target="_blank" rel="noopener"';

        if( $group['choice'] == 'pagelink' ) {
            $url = $group['page_link'];
            $target = '';
        } ?>

      <a class="dispo_lien" href="<?php echo $url ?>" <?php echo $target; ?>>
        <p><?php echo $group['titre']; ?></p>
        <div class="icon-container">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
        </div>
      </a>
      <?php endif; ?>
    </div>
  </div>


  <!--COL DROITE BANDEAU-->
  <div class="bandeau_col-d">
    <img class="bandeau_img" src="<?php echo get_field('bandeau_image_d')['sizes']['medium_large']; ?>">
    <div class="bandeau_black-container bandeau_block">
      <h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
    </div>
    <!--HOVER-->
    <div class="bandeau_black-container-hover bandeau_hover">
      <h3><?php the_field('bandeau_survol_d_titre')['titre'] ?></h3>
      <p><?php the_field('bandeau_survol_d_texte_d')['titre'] ?></p>
      <?php 
                        $group = get_field('bandeau_btn_d');

                        if($group['titre']) :

                        $url = $group['url'];
                        $target = 'target="_blank" rel="noopener"';

                        if( $group['choice'] == 'pagelink' ) {
                            $url = $group['page_link'];
                            $target = '';
                        } ?>
      <a class="dispo_lien dispo_lien_white" href="<?php echo $url ?>" <?php echo $target; ?>>
        <p><?php echo $group['titre']; ?></p>
        <div class="icon-container">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
        </div>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>





<!---------------------------------------------------------------------------INTRODUCTION-------------------------------------------------------------------->
<section class="section_introduction">
  <div class="introduction_col-g">
    <div class="introduction_black-container">
      <p><?php the_field('introduction_texte')['titre'] ?></p>
    </div>
    <div class="introduction_white-container">
      <h3><?php the_field('introduction_titre')['titre'] ?></h3>
      <p><?php the_field('introduction_textarea')['titre'] ?></p>
      <?php 
          $introductionLink = get_field('introduction_bouton');

          if($introductionLink['titre']):

            $url = $introductionLink['url'];
            $target = 'target="_blank" rel="noopener"';

            if( $introductionLink['choice'] == 'pagelink' ) {
              $url = $introductionLink['page_link'];
              $target = '';

             } ?>

      <a class="dispo_lien" href="<?php echo $url ?>" <?php echo $target; ?>>
        <p><?php echo $introductionLink['titre']; ?></p>
        <div class="icon-container">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
        </div>
      </a>
      <?php endif; ?>
    </div>
  </div>
  <div class="col_d">
    <img class="introduction_img" src="<?php echo get_field('introduction_image')['sizes']['medium_large']; ?>">
  </div>
</section>



<!---------------------------------------------------------------------------CENTRE-------------------------------------------------------------------->
<section class="section_centre">
  <div class="centre_grey-container">
    <div class="centre_white-container">
      <div class="icon-container">
        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-small.svg" width="20">
      </div>
      <p class="centre_texte"><?php the_field('centre_texte')['titre'] ?></p>
      <?php 
          
          $centreLink = get_field('centre_bouton');

          if($centreLink['titre']):

            $url = $centreLink['url'];
            $target = 'target="_blank" rel="noopener"';

            if( $centreLink['choice'] == 'pagelink' ) {
              $url = $centreLink['page_link'];
              $target = '';

             } ?>

      <a class="dispo_lien" href="<?php echo $url ?>" <?php echo $target; ?>>
        <p><?php echo $centreLink['titre']; ?></p>
        <div class="icon-container">
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
        </div>
      </a>
      <?php endif; ?>
    </div>
  </div>
</section>




<!---------------------------------------------------------------------------INFERIEUR-------------------------------------------------------------------->
<section class="section_inferieur">
  <div class="inferieur_col-g">
    <img class="inferieur_img" src="<?php echo get_field('inferieur_image')['sizes']['medium_large']; ?>">
  </div>

  <div class="inferieur_col-d">
    <h3><?php the_field('inferieur_titre')['titre'] ?></h3>
    <p><?php the_field('inferieur_textarea')['titre'] ?></p>
    <?php 
          
          $inferieurLink = get_field('inferieur_bouton');

          if($inferieurLink['titre']):

            $url = $inferieurLink['url'];
            $target = 'target="_blank" rel="noopener"';

            if( $inferieurLink['choice'] == 'pagelink' ) {
              $url = $inferieurLink['page_link'];
              $target = '';

             } ?>

    <a class="dispo_lien" href="<?php echo $url ?>" <?php echo $target; ?>>
      <p><?php echo $inferieurLink['titre']; ?></p>
      <div class="icon-container">
        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
      </div>
    </a>
    <?php endif; ?>
  </div>
</section>















<?php get_footer(); ?>
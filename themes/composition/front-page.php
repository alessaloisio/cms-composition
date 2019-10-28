<?php get_header(); ?>


 <!---------------------------------------------------------------------------BANDEAU--------------------------------------------------------------------->

<section class="section_bandeau">
  <!--COL GAUCHE BANDEAU-->
  <div class="bandeau_col-g">
    <div class="bandeau_img" style="background: url(<?php echo get_field('bandeau_image_g')['sizes']['medium_large']; ?>) no-repeat center center;"></div>
    
    <div class="bandeau_white-container bandeau_block">
      <div class="part1 active">
        <h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
      </div>
      <div class="part2">
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
          } 
        ?>

        <a class="dispo_lien" href="<?php echo $url ?>" <?php echo $target; ?>>
          <p><?php echo $group['titre']; ?></p>
          <div class="icon-container">
            <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
          </div>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>


  <!--COL DROITE BANDEAU-->
  <div class="bandeau_col-d">
    <div class="bandeau_img" style="background: url(<?php echo get_field('bandeau_image_d')['sizes']['medium_large']; ?>) no-repeat center center;"></div>
    
    <div class="bandeau_black-container bandeau_block">
      <div class="part1 active">
        <h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>
      </div>

      <div class="part2">
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
        <a class="dispo_lien_white" href="<?php echo $url ?>" <?php echo $target; ?>>
          <p><?php echo $group['titre']; ?></p>
          <span class="icon-container-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15.429 9.286">
              <g id="fleche-droite" transform="translate(12.929 8.786) rotate(180)">
                <line id="Line_40" data-name="Line 40" x1="13.879" transform="translate(-1.45 4.143)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
                <path id="Path_612" data-name="Path 612" d="M4.143,0,0,4.143,4.143,8.286" transform="translate(-2)" fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1"/>
              </g>
            </svg>
          </span>
        </a>
        <?php endif; ?>
      </div>
    </div>
   </div>
</section>




<div class="frontpage-content center">
<!---------------------------------------------------------------------------INTRODUCTION-------------------------------------------------------------------->
<section class="section_introduction">
  <div class="introduction_col-g">
    <div class="introduction_black-container slide-content-left slide-from-left">
      <p><?php the_field('introduction_texte')['titre'] ?></p>
    </div>
    <div class="introduction_white-container slide-content-left slide-from-left">
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
  <div class="introduction_col-d">
    <div class ="introduction_col-img" >
    <div class="introduction_img fade-in" style="background: url(<?php echo get_field('introduction_image')['sizes']['medium_large']; ?>) no-repeat center center;"></div>
    </div>
  </div>
</section>



<!---------------------------------------------------------------------------CENTRE-------------------------------------------------------------------->
<section class="section_centre">
  <div class="centre_grey-container slide-content-left slide-from-left">
    <div class="centre_white-container">
      <div class="icon-container">
        <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/logo-small.svg" width="40">
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
</div>



<!---------------------------------------------------------------------------INFERIEUR-------------------------------------------------------------------->
<section class="section_inferieur">
  <div class="inferieur_col-g">
    <img class="inferieur_img fade-in" src="<?php echo get_field('inferieur_image')['sizes']['medium_large']; ?>">
  </div>

  <div class="inferieur_col-d">
    <div class="inferieur_container-white slide-content-right slide-from-right">
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
  </div>
</section>


<?php get_footer(); ?>
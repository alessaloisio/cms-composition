<?php /* Template Name: Contact Template */ ?></div>

<?php get_header(); ?>

<div class="page-content">
<!------------------------------------- CONTACT------------------------------------------------------>
<div class="center">
    <section class="contact">
        <div class ="contact_col-side">
            <div class ="contact_titre-container slide-from-left slide-content-left">
                <div class ="contact_trait">_</div>
                <h1>Contact</h1>
            </div>
            <?php 
                $group = get_field('contact_itineraire');
                $url = $group['url'];
                $target = 'target="_blank" rel="noopener"';
            ?>
            <a class="dispo_lien_white" href="<?php echo $url ?>" <?php echo $target; ?>>
                <p><?php echo $group['titre']; ?></p>
                <div class="icon-container">
                    <img class="icon filter-icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20" style ="margin-top:10px; margin-left:18px; filter:invert(1)">
                </div>
            </a>
        </div>

        <div class ="contact_col-infos">
            <div class ="contact_informations ">
                <div class ="contact_renseignements slide-from-right slide-content-right">

                    <div class="contact_adress">
                        <img class="filter-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/svg/marker-road.svg" width="18">
                        <p><?php the_field('contact_adresse')['titre'] ?></p>
                    </div>
    
                    <div class="contact_email">
                        <img class="filter-icon"  src="<?php echo get_stylesheet_directory_uri();?>/assets/svg/icon-arrobas.svg" width="18">
                        <p><?php the_field('contact_email')['titre'] ?></p>
                    </div>

                    <div class ="contact_telephone">
                        <img class="filter-icon"  src="<?php echo get_stylesheet_directory_uri();?>/assets/svg/phone-2.svg" width ="18">  
                        <a><p><?php the_field('contact_telephone')['titre'] ?></p></a>
                    </div>

        
            </div>
            <div class ="contact_horaires slide-from-right slide-content-right">
                <div class ="contact_clock">
                    <img class="filter-icon" src="<?php echo get_stylesheet_directory_uri();?>/assets/svg/time-clock.svg" width ="18">
                    <h3>Horaires</h3>
                </div>
                <p><?php the_field('contact_horaires')['titre'] ?></p>
            </div>
        </div>
        <div class ="contact_map fade-in">
            <?php the_field('contact_map')['titre'] ?>


        </div>
    

    </section>


<!------------------------------------- FORMULAIRE ------------------------------------------------------>
    <section class ="formulaire fade-in">
        <div class ="formulaire_col-side">
            <div class ="formulaire_accroche">
                <?php the_field('formulaire_accroche')['titre'] ?>
            </div>
            <p class ="formulaire_de_contact">Formulaire de contact</p>
        </div>
        <div class="formulaire_col-form">
            <form class="formulaire_form">
                <?php
                advanced_form('form_5da596a009fdd', $args);
                ?>
            </form>
        </div>
    </section>
</div>

<!------------------------------------- PROMOTION------------------------------------------------------>


<div class="block-contact slide-content-right" style="background-image:url(<?php echo get_field('promotion_image')['sizes']['medium_large']; ?>);">
    <div class="center">
      <div class="white-block slide-content-left">
        <h1><?php the_field('promotion_promotion')['titre'] ?></h1>
        <a class="link" href="<?php echo get_site_url(); ?>/contact">
          My Wishlist <span class="arrow"><img src="<?= get_template_directory_uri() ?>/assets/svg/Group 1300.svg" alt="Fleche vers la droite"></span>
        </a>
      </div>
    </div>
  </div>

</div>

<?php get_footer(); ?>
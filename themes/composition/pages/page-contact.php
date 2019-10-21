<?php /* Template Name: Contact Template */ ?>

<?php get_header(); ?>



<!------------------------------------- CONTACT------------------------------------------------------>
<section class="contact">
<div class ="contact_col-side">
    <div class ="contact_titre-container">
        <div class =contact_trait>_</div>
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
          <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/svg/fleche-droite.svg" width="20">
        </div>
      </a>
</div>

<div class ="contact_col-infos">
<div class ="contact_informations">
    <div class ="contact_renseignements">
        <p><p><?php the_field('contact_adresse')['titre'] ?></p></p>
        <p><?php the_field('contact_email')['titre'] ?></p>
        <p><?php the_field('contact_telephone')['titre'] ?></p>
    </div>
    <div class ="contact_horaires">
        <h3>Horaires</h3>
        <p><?php the_field('contact_horaires')['titre'] ?></p>
    </div>
</div>
<div class ="contact_map">
<?php the_field('contact_map')['titre'] ?>


</div>
</div>

</section>


<!------------------------------------- FORMULAIRE ------------------------------------------------------>
<section class ="formulaire">
<div class ="formulaire_col-side">
<div class ="formulaire_accroche">
<h3><?php the_field('formulaire_accroche')['titre'] ?></h3>
</div>
<p class ="formulaire_de_contact">Formulaire de contact</p>
</div>
<div class="formulaire_col-form">
    <form class="formulaire_form"><?php
advanced_form('form_5da596a009fdd');
?></form>
</div>
</section>

<?php get_footer(); ?>